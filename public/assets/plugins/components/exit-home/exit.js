document.addEventListener("mouseleave", function(e){
    var contentDisplay = window.sessionStorage.getItem('contentDisplay');
    if( e.clientY < 0 && !contentDisplay)
    {
        $("#modal_exit_intent_home").removeClass('d-none');
        $("#modal_exit_intent_home").modal('show');
        window.sessionStorage.setItem('contentDisplay', 'true');

    }
}, false);
