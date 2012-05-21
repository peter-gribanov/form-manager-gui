(function($){

// выполняет наследование
function inherit(Child, Parent) {
	var F = new Function();
	F.prototype = Parent.prototype;

	Child.prototype = new F();
	Child.prototype.constructor = Child;
	Child.super = Parent.prototype;
}


// щетчик индексов элеемнтов
var element_index = 0;
// индекс слоя настроек элеемнта
var layer_index = 0;



// Стек для хранения элиментов
var Stack = function(){};
inherit(Stack, Array);
// добавить в стек
Stack.prototype.add = function(element) {
	this[element.id] = element;
	console.log('Add to stack #'+element.id);
	return element;
};
// получить из стека
Stack.prototype.get = function(id) {
	return this[id];
};
// удалить из стека
Stack.prototype.remove = function(id) {
	console.log('Remove from stack #'+id);
	this.slice(id, 1);
};

var Structure = new Stack();



// Базовый класс для всех элиментов
var Base = function(dom){
	console.log('Base  constructor');
	this.id = ++element_index;
	this.dom = dom;

	var id = this.id;
	$(dom).data('index', this.id)
		.find('input, select, textarea')
		.each(function() {
			var name = $(this).attr('name');
			var p = name.indexOf('[');
			if (p != -1) {
				name = '['+name.substr(0, p-1)+']'+name.substr(p);
			} else {
				name = '['+name+']';
			}
			if (name == 'name') {
				$(this).data('control', 'name');
			}
			$(this).attr('name', ''+id+name);
		});
};
// устанавливает родителя
Base.prototype.setParent = function(parent){
	if (this.parent) {
		this.parent.removeObserver(this);
	}
	parent.addObserver(this);
	this.parent = parent;
};
// обработчик изменений произашедших в наблюдаемом классе
Base.prototype.event = function(){
	console.log('Base event #'+this.id);
	switch (arguments[0][0]) {
		case 'remove':
			this.remove();
			break;
		case 'move':
			// TODO обновить Хлебные крошки
			console.log(this.getNames());
		case 'test':
			console.log(arguments[0]);
	}
};
// отобразить панель настроек
Base.prototype.showSettings = function(){
	console.log('Show settings #'+this.id);
	$(this.dom).find('[data=settings]').css('z-index', ++layer_index);
};
// удаление элимента
Base.prototype.remove = function() {
	console.log('Remove #'+this.id);
	this.dom.parentNode.removeChild(this.dom);
	Structure.remove(this.id);
	this.notifyObservers('remove');
};
// перемещение элимента
Base.prototype.move = function() {
	console.log('Move #'+this.id);
	this.notifyObservers('move');
};
Base.prototype.getNames = function() {
	var names = [];
	if (this.parent && this.parent instanceof Base) {
		names = this.parent.getNames();
	}
	return names.puch([
		this.id,
		$(this.dom).find('[data-control=name]').value()
	]);
};



// класс фильтра
var Filter = function(dom){
	Base.call(this, dom);
	console.log('Filter  constructor');
	parent_id = $(dom).parent('[data=element],[data=collection]').data('index');
	if (parent = Structure.get(parent_id)) {
		this.setParent(parent);
	}
};
inherit(Filter, Base);
//обработчик изменений произашедших в наблюдаемом классе
Filter.prototype.event = function(){
	console.log('Filter event #'+this.id);
	Base.prototype.event.call(this, arguments);
};
// устанавливает родителя
Filter.prototype.setParent = function(parent){
	if (this.parent && this.parent instanceof Element) {
		this.parent.removeFilter(this);
	}
	Base.prototype.setParent.call(this, parent);
};


// класс элимента
var Element = function(dom){
	Base.call(this, dom);
	console.log('Element  constructor');
	this.filters = [];
	this.observers = [];
	parent_id = $(dom).parent('[data=collection]').data('index');
	if (parent = Structure.get(parent_id)) {
		this.setParent(parent);
	}
};
inherit(Element, Base);
//обработчик изменений произашедших в наблюдаемом классе
Element.prototype.event = function(){
	console.log('Element event #'+this.id);
	Base.prototype.event.call(this, arguments);
};
// устанавливает родителя
Element.prototype.setParent = function(parent){
	if (this.parent && this.parent instanceof Collection) {
		this.parent.removeChild(this);
	}
	Base.prototype.setParent.call(this, parent);
};
// оповещает наблюдателей
Element.prototype.notifyObservers = function(){
	for (var i = 0; i < this.observers.length; i++) {
		if (this.observers[i] instanceof Base) {
			this.observers[i].event.apply(this.observers[i], arguments || []);
		}
	}
};
// добавляет наблюдателя
Element.prototype.addObserver = function(observer) {
	if (observer != this) {
		this.observers.push(observer);
	}
};
// удаляет наблюдателя
Element.prototype.removeObserver = function(observer) {
	for (var i = 0; i < this.observers.length; i++) {
		if (this.observers[i] == observer) {
			this.observers.slice(i, 1);
			break;
		}
	}
};
// добавление фильтра
Element.prototype.addFilter = function(filter){
	this.filters.push(filter);
	filter.setParent(this);
	return filter;
};
// удаление фильтра
Element.prototype.removeFilter = function(filter){
	for (var i = 0; i < this.filters.length; i++) {
		if (this.filters[i] == filter) {
			this.filters.slice(i, 1);
			break;
		}
	}
};



// класс колекции
var Collection = function(dom){
	Element.call(this, dom);
	console.log('Collection  constructor');
	this.children = [];
};
inherit(Collection, Element);
//обработчик изменений произашедших в наблюдаемом классе
Collection.prototype.event = function(){
	console.log('Collection event #'+this.id);
	Element.prototype.event.call(this, arguments);
};
// добавление элимента
Collection.prototype.addChild = function(element){
	this.children.push(element);
	element.setParent(this);
	return element;
};
// удаление фильтра
Collection.prototype.removeChild = function(child){
	for (var i = 0; i < this.child.length; i++) {
		if (this.children[i] == filter) {
			this.children.slice(i, 1);
			break;
		}
	}
};








var Form = new Collection();
// запрещаем перемещение и удаление элимента
Form.remove = Form.move = Form.event = function() {};
Structure.add(Form);

Form.addFilter(Structure.add(new Filter()));
Form.notifyObservers('test', 999);





$(function(){

	$('.remove').click(function(){
		if (!confirm('Вы уверены что хотите удалить форму "%"?')) {
			return false;
		}
	});
	$('.b-elements h3, .b-filters h3').click(function(){
		$('.b-elements').toggleClass('active');
		$('.b-filters').toggleClass('active');
	});

});
})(jQuery);