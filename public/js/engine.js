function go(action, element) {
    $.get( uri + action + config, function( data ) {
        $( "#" + element ).html( data );
    });
}

window.onload = function() {
    this.go("default","body");
}