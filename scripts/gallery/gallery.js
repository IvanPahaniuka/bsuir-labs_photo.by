var a = document.querySelectorAll('.photo-item > a');
var shower = document.querySelector('.photo-shower');

shower.onclick = function(e){
    shower.classList.remove('active');
};

[].forEach.call(a, function (el) {
    el.onclick = function (e) {
        var src = this.querySelector('img').src;
        var name = this.querySelector('.name').textContent;

        shower.querySelector('img').src = src;
        shower.querySelector('.name').textContent = name;

        shower.classList.add('active');
    }
});