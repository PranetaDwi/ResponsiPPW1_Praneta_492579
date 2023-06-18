function check(){
    var inp= document.getElementById("inputan").value;
    inp.toLowerCase();
    if (inp == 'plaid'){
        window.location.href='#plaid';
    }
    else if (inp == 'white'){
        window.location.href='#white';
    }
    else if (inp == 'jeans'){
        return window.location.href='#jeans';
    }
    else if (inp == 'semiformal'){
        return window.location.href='#tambahan_';
    }
    else if (inp == 'blue'){
        return window.location.href='#tambahan2_';
    }
}