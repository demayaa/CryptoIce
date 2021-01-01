
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

  <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
    $(document).ready(function() {
    
      // SideNav Button Initialization
      $(".button-collapse").sideNav();
      // SideNav Scrollbar Initialization
      var sideNavScrollbar = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(sideNavScrollbar);
    })
  </script>
  <script src="{{asset('js/ckeditor.js')}}"></script>
    
  <script>
        let textarea = document.querySelector( '#content' );
    	BalloonEditor
    		.create( document.querySelector( '#editor' ), {
    			 toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    		} )
    		.then( editor => {
    		    editor.updateSourceElement();
    			window.editor = editor;
    		} )
    		.catch( err => {
    			console.error( err.stack );
    		} );
    	document.getElementById( 'submit' ).onclick = () => {
            textarea.value = editor.getData();
        }
  </script>
  <script>
    // Material Select Initialization
    $(document).ready(function() {
    $('.category').materialSelect();
    });
    
    // Material Select Initialization
    $(document).ready(function() {
    $('.tags').materialSelect();
    });
  </script>
  
  
@toastr_js
@toastr_render