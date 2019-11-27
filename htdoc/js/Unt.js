// function test function //
// parcala(".class/#id" , "tag");
parcala(".demo","span");
parcala(".demo2","b");
parcala(".demo3","div");
parcala(".demo4","span");
parcala(".demo5","b");
// function test function //
// parcala function start //
function parcala(e,tag){
$(e).each(function (index) {
var char = $(this).text().split("");
$this = $(this);
$this.empty();
$.each(char, function (i, el) {
$this.append("<"+tag+">"+el+"</"+tag+">");
});
});
}
// parcala function finish //