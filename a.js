function a(){
    var hello = function (){
        console.log('1');
    }
    return hello();
    function hello(){
        console.log('2');
    }
}
a();