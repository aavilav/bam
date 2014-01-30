
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/modal.js"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    </head>
    <body> 
        <h4 class="modal-title">Encuesta Pre-Servicio</h4>
        <form action="add_encuesta.php">
          <table class="table" align="center">
              <tr><td>Del servicio ha brindar Ud. espera que:</td></tr>
              <tr>
                  <td>         
                          <div><strong>1. El personal cuente con equipamiento moderno y adecuado</strong></div>
              
                          <strong>1</strong> <input type="radio" name="r1" value="1">&nbsp;            
                              <strong>2</strong> <input type="radio" name="r1" value="2">&nbsp;  
                              <strong>3</strong> <input type="radio" name="r1" value="3">&nbsp;
                              <strong>4</strong> <input type="radio" name="r1" value="4">&nbsp;  
                              <strong>5</strong> <input type="radio" name="r1" value="5">&nbsp;
                         
                        <div><strong>2. El personal tenga apariencia presentable</strong></div>
             
                          <strong>1</strong> <input type="radio" name="r2" value="1">&nbsp;
              
                          <strong>2</strong> <input type="radio" name="r2" value="2">&nbsp;
              
                          <strong>3</strong> <input type="radio" name="r2" value="3">&nbsp;
              
                          <strong>4</strong> <input type="radio" name="r2" value="4">&nbsp;
              
                          <strong>5</strong> <input type="radio" name="r2" value="5">&nbsp;         
                         
                          <div><strong>3. El servicio realizado cumpla con sus expectativas</strong></div>
              
                          <strong>1</strong> <input type="radio" name="r3" value="1">&nbsp;
              
                          <strong>2</strong> <input type="radio" name="r3" value="2">&nbsp;
              
                          <strong>3</strong> <input type="radio" name="r3" value="3">&nbsp;
              
                          <strong>4</strong> <input type="radio" name="r3" value="4">&nbsp;
             
                          <strong>5</strong> <input type="radio" name="r3" value="5">&nbsp;
                          
                          <div><strong>4. El servicio se realice de manera ordenada</strong></div>
             
                          <strong>1</strong> <input type="radio" name="r4" value="1">&nbsp;
             
                          <strong>2</strong> <input type="radio" name="r4" value="2">&nbsp;
             
                          <strong>3</strong> <input type="radio" name="r4" value="3">&nbsp;
              
                          <strong>4</strong> <input type="radio" name="r4" value="4">&nbsp;
              
                          <strong>5</strong> <input type="radio" name="r4" value="5">&nbsp;
                          
                          <div><strong>5. El personal escuche y atienda todas sus necesidades</strong></div>
              
                          <strong>1</strong> <input type="radio" name="r5" value="1">&nbsp;
              
                          <strong>2</strong> <input type="radio" name="r5" value="2">&nbsp;
             
                          <strong>3</strong> <input type="radio" name="r5" value="3">&nbsp;
             
                          <strong>4</strong> <input type="radio" name="r5" value="4">&nbsp;
              
                          <strong>5</strong> <input type="radio" name="r5" value="5">&nbsp;
                          
                          <div><strong>6. La atención del personal sea cordial y agradable</strong></div>
              
                  <strong>1</strong> <input type="radio" name="r6" value="1">&nbsp;
              
                  <strong>2 </strong><input type="radio" name="r6" value="2">&nbsp;
              
                  <strong>3</strong> <input type="radio" name="r6" value="3">&nbsp;
              
                  <strong>4</strong> <input type="radio" name="r6" value="4">&nbsp;
              
                  <strong>5</strong> <input type="radio" name="r6" value="5">&nbsp;
                  
                  <div><strong>7. El personal cuente con los implementos de seguridad</strong></div>
              
                  <strong>1</strong> <input type="radio" name="r7" value="1">&nbsp;
              
                  <strong>2</strong> <input type="radio" name="r7" value="2">&nbsp;
              
                  <strong>3 </strong><input type="radio" name="r7" value="3">&nbsp;
              
                  <strong>4</strong> <input type="radio" name="r7" value="4">&nbsp;
              
                  <strong>5</strong> <input type="radio" name="r7" value="5">&nbsp;
                  
                  <div><strong>8. El servicio realizado tenga un funcionamiento correcto</strong></div>
              
                  <strong>1</strong> <input type="radio" name="r8" value="1">&nbsp;
              
                  <strong>2</strong> <input type="radio" name="r8" value="2">&nbsp;
             
                  <strong>3 </strong><input type="radio" name="r8" value="3">&nbsp;
              
                  <strong>4 </strong><input type="radio" name="r8" value="4">&nbsp;
              
                  <strong>5</strong> <input type="radio" name="r8" value="5">&nbsp;
                  
                  <div><strong>9. El personal esté capacitado para el servicio</strong></div>
              
                  <strong>1</strong> <input type="radio" name="r9" value="1">&nbsp;
              
                  <strong>2</strong> <input type="radio" name="r9" value="2">&nbsp;
              
                  <strong>3</strong> <input type="radio" name="r9" value="3">&nbsp;
              
                  <strong>4</strong> <input type="radio" name="r9" value="4">&nbsp;
              
                  <strong>5</strong> <input type="radio" name="r9" value="5">&nbsp;
                  
                  <div><strong>10. El servicio se realice dentro del tiempo establecido</strong></div>
              
                  <strong>1</strong> <input type="radio" name="r10" value="1">&nbsp;
              
                  <strong>2</strong> <input type="radio" name="r10" value="2">&nbsp;
              
                 <strong> 3</strong> <input type="radio" name="r10" value="3">&nbsp;
              
                  <strong>4</strong> <input type="radio" name="r10" value="4">&nbsp;
              
                  <strong>5</strong> <input type="radio" name="r10" value="5">&nbsp;
         
                      <input type="hidden" value="1" name="tipo"> 
          <?php  $ser_codigo=$_GET['ser_codigo'];?>
                      <input type="hidden" value="<?php   echo $ser_codigo; ?>" name="ser_codigo">
                      
                      <div><input type="submit" class="btn btn-primary" value="Guardar"></div>
                  </td>
              </tr>
          </table>
        </form>                        
    </body>
</html>
