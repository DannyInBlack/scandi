function show(id){
    
    x = document.getElementsByClassName('content');
    for(let i = 0; i < x.length; i++){
        document.getElementById(x[i].id).setAttribute('hidden','');
    }
    document.getElementById(id).removeAttribute('hidden');

    f = document.getElementsByClassName('form-input');

    for(let i = 0; i < f.length; i++){
        document.getElementById(f[i].id).removeAttribute('required');
    }


    f = document.getElementsByClassName(id);

    for(let i = 0; i < f.length; i++){
        document.getElementById(f[i].id).setAttribute('required','');
    }

    
}
