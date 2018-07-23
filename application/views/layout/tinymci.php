<style type="text/css">
  textarea.notebook {
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
    font-weight: 700;
    width: 100%;
    padding: 5px 16px;
    margin-bottom: 20px;
    resize: vertical;
    font-size: 11px;
    line-height: 24px;
    
    -webkit-appearance: none;
    border-radius: 0;
    background: url(<?=base_url('/asset/notebook.png');?>);
  }
</style>
<script type="text/javascript">
  $(document).ready(function() {
      $("#gambar").click(function(event) {
          $("#input-gambar").click(); 
      });
  });
</script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: 'textarea',
    height: 500,
    theme: 'modern',
    plugins: [
      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
      'searchreplace wordcount visualblocks visualchars code fullscreen',
      'insertdatetime media nonbreaking save table contextmenu directionality',
      'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
    ],
    toolbar1: 'undo redo | forecolor backcolor emoticons|bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | codesample help | emoticons | link image media print preview',
    image_advtab: true,
    templates: [
      { title: 'Test template 1', content: 'Test 1' },
      { title: 'Test template 2', content: 'Test 2' }
    ],
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'
    ]
   });
 </script>