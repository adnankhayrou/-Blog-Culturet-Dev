    editorStart();

    let addArticle = document.querySelector("#btn-plus") ;
    let form = document.getElementById('form') ;

    addArticle.addEventListener("click", (e)=>{
    e.preventDefault() ;
    const newTitleField = document.createElement('input');
    const newTitleLabel = document.createElement('label') ;
    const newImageLabel = document.createElement('label') ;
    const newImageInput = document.createElement('input') ;
    const newCategoryLabel = document.createElement('label') ;
    const newCategorySelect = document.createElement('select') ;
    const newCategoryOption = document.createElement('option') ;
    const newBodyLabel = document.createElement('label') ;
    const newBodyTextArea = document.createElement('TEXTAREA') ;
    const OPTIONS = document.querySelectorAll('option') ;
    let CategoryOptionn = [] ;
    
    for (let i = 0; i < OPTIONS.length; i++) {
      let option = document.createElement('option') ;
      CategoryOptionn.push(option) ;
      CategoryOptionn[i].innerHTML = OPTIONS[i].innerHTML ;
      CategoryOptionn[i].setAttribute('value',i)
    }
    

   newTitleField.classList.add('form-control') ;
   newTitleLabel.classList.add('form-label') ;

   newImageLabel.classList.add('form-label') ;
   newImageInput.classList.add('form-control') ;
    
   newCategoryLabel.classList.add('form-label') ;
   newCategorySelect.classList.add('form-select') ;

   newBodyTextArea.classList.add('form-control') ;
   newBodyLabel.classList.add('form-label') ;

   newTitleLabel.innerHTML = "Title" ;
   newImageLabel.innerHTML = "Image" ;
   newCategoryLabel.innerHTML = "Category" ;
   newBodyLabel.innerHTML = "Description" ;

  
    for (let i = 0; i < CategoryOptionn.length; i++) {
        if (newCategorySelect.length < 6 ) 
        newCategorySelect.append(CategoryOptionn[i]) ;
    }

    newTitleField.setAttribute('type','text') ;
    newTitleField.setAttribute('placeholder','title') ;
    newTitleField.setAttribute('name', 'title') ;

    newImageInput.setAttribute('type','file') ;
    newImageInput.setAttribute('name', 'image') ;

    newCategorySelect.setAttribute('name','category') ;
    newCategoryOption.setAttribute('value','') ;

    newBodyTextArea.setAttribute('name', 'description') ;
    newBodyTextArea.setAttribute('placeholder', 'Article Body !!') ;


    form.append(newTitleLabel, newTitleField, newImageLabel, newImageInput, newCategoryLabel,newCategorySelect, newBodyLabel, newBodyTextArea);
 
    editorStart();
})


function editorStart(){
    tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },],
    });
}











   
    

   