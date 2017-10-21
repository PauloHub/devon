responsavelList = {
    'init': function()
    {
        this.divResponsavelList = document.getElementById('divResponsavelList');
        this.divResponsavelBase = document.getElementById('divResponsavelBase');
    },
    
    'insert': function()
    {
        var newDiv = this.divResponsavelBase.cloneNode(true);
        newDiv.style.display = ' ';
        console.log('newDiv => ', newDiv);
        this.divResponsavelList.appendChild(newDiv);
    },
    
    'remove': function(el)
    {
        el.parentNode.removeChild(el);
    }
};
responsavelList.init();