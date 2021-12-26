function CloneForm(formName) {
    var formCount = document.forms.length;
    var oForm = document.forms[formName];
    var clone = oForm.cloneNode(true);
    clone.name += "_" + formCount;
    var formu = document.querySelector('.formularios');
    formu.appendChild(clone);
}