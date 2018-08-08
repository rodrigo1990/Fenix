<?php 

class BaseDatos{

	public $base='fenix';
	public $servidor='localhost';
	public $conexion;
	public $mysqli;


	public function __construct(){
		
		$this->conexion=mysqli_connect($this->servidor,'root','',$this->base) or die ("No se ha podido establecer conexion con la base de datos");
	

		$this->mysqli=new mysqli($this->servidor,'root','', $this->base);

		$this->mysqli->set_charset("utf8");
	}


	public function insertarLocacion($locacion){

		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Descripcion
									  FROM locacion
									  WHERE Descripcion=(?)");

		$stmt->bind_param("s",$locacion);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila_buscar_locacion=$resultado->fetch_assoc();
		//Sino existe, esta es cargada
		if($fila_buscar_locacion['Descripcion']==''){		

			try{
				$locacion=strtoupper($locacion);

				$stmt=$this->mysqli->prepare("INSERT INTO locacion(Descripcion)
				  		  						VALUES (?)");

				$stmt->bind_param("s",$locacion);

				$stmt->execute();

				echo "<h1 class='white-text'>La locacion ha <br> sido actualizada correctamente</h1>";

			}catch(Exception $e){

				echo "¡Ups! Ha ocurrido un error, intentelo nuevamente";

			}
			

		}else{

			echo "<h1 class='white-text'>La locacion ha sido cargada anteriormente</h1>";

		}

		$stmt->close();

	}//FUNCTION

	public function insertarEvento($artista,$fecha,$copete,$descripcion,$linkTicket,$linkYoutube1,
									$linkFacebook1,$linkTwitter1,$linkInstragram1,$linkFacebook2,$linkTwitter2,$linkInstragram2,
									$imagenBig,$imagenMd,$imagenSm,$esPortada,$esDestacado,$locacion){




		try{
			//Renombrar archivos/campos
			$extension=pathinfo($imagenBig,PATHINFO_EXTENSION);

			$imagenBig=rand(100000000,999999999).".".$extension;

			$extension=pathinfo($imagenMd,PATHINFO_EXTENSION);

			$imagenMd=rand(100000000,999999999).".".$extension;

			$extension=pathinfo($imagenMd,PATHINFO_EXTENSION);

			$imagenSm=rand(100000000,999999999).".".$extension;

			//INSERCION EN BD
			$stmt=$this->mysqli->prepare("INSERT INTO evento(Artista,Fecha,Copete,Descripcion,Link_Compra,Link_Youtube_1,
														Link_Facebook_1,Link_Twitter_1,Link_Instagram_1,Link_Facebook_2,
														Link_Twitter_2,Link_Instagram_2,Img_Big,Img_Md,Img_Sm,Es_Destacado,Es_Portada,ID_Locacion)
					  		  						VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

			$stmt->bind_param("sssssssssssssssiii",$artista,$fecha,$copete,$descripcion,$linkTicket,$linkYoutube1,$linkFacebook1,$linkTwitter1,
																$linkInstragram1,$linkFacebook2,$linkTwitter2,$linkInstragram2,
																$imagenBig,$imagenMd,$imagenSm,$esPortada,$esDestacado,$locacion);
			$stmt->execute();

			echo "<h1 class='white-text'>El evento ha <br> sido subido correctamente</h1>";


			try{

				//CARGA DE IMAGENES EN CARPETA
		
				//carga imagenes Big
				$target_path = "../imagenes/home/imagenesBig/";
				$target_path = $target_path . $imagenBig;

				move_uploaded_file($_FILES['imagenBig']['tmp_name'], $target_path);

				//carga imagenes Medium
				$target_path = "../imagenes/home/imagenesMd/";
				$target_path = $target_path . $imagenMd;

				move_uploaded_file($_FILES['imagenMd']['tmp_name'], $target_path);

				//carga imagenes small
				$target_path = "../imagenes/home/imagenesSm/";
				$target_path = $target_path . $imagenSm;

				move_uploaded_file($_FILES['imagenSm']['tmp_name'], $target_path);


			}catch(Exception $e){

				echo "<h1 class='white-text'>¡Ups! Ha ocurrido un error mientras copiabamos los archivos a su carpeta : ",$e->getMessage(),"</h1>";
			
			}


			

		}catch(Exception $e){


			echo "<h1 class='white-text'>¡Ups! Ha ocurrido un error: ",$e->getMessage(),"</h1>";
		}



		$stmt->close();


	}//insertarEvento

	public function listarTodosLosEventos(){

		try{
			$sql="SELECT *
				 FROM evento ";



			$consulta=mysqli_query($this->conexion,$sql);

			while($fila=mysqli_fetch_assoc($consulta)){
			
						echo "<tr>
								<td>".$fila['Artista']."</td>
								<td>".$fila['Fecha']."</td>	
								<td><a class='simple-link' href=modificarEvento.php?id=".$fila['ID'].">Modificar evento</a></td>
								<td><a class='simple-link' href=bajaEventoProcess.php?id=".$fila['ID'].">Eliminar evento</a></td>
							
							</tr>";
						

			}

		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}
	}//listar todos los eventos


	public function listarArtista($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Artista
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Artista'];


	}//function

	public function listarFecha($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Fecha
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Fecha'];


	}//function

		public function listarCopete($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Copete
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Copete'];


	}//function


	public function listarDescripcion($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Descripcion
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Descripcion'];


	}//function

	public function listarLinkTicket($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Compra
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Compra'];


	}//function

	public function listarLinkYouTube($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Youtube_1
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Youtube_1'];


	}//function


	public function listarLinkFacebook1($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Facebook_1
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Facebook_1'];


	}//function


	public function listarLinkTwitter1($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Twitter_1
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Twitter_1'];


	}//function

	public function listarLinkInstagram1($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Instagram_1
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Instagram_1'];


	}//function

	public function listarLinkFacebook2($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Facebook_2
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Facebook_2'];


	}//function

	public function listarLinkTwitter2($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Twitter_2
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Twitter_2'];


	}//function

	public function listarLinkInstagram2($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Link_Instagram_2
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		echo $fila['Link_Instagram_2'];


	}//function

	public function listarPortada($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Es_Portada
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		return $fila['Es_Portada'];


	}//function

	public function listarDestacado($id){
		//Busco si ya existe una locacion igual cargada
		$stmt=$this->mysqli->prepare("SELECT Es_Destacado
									  FROM evento
									  WHERE ID=(?)");

		$stmt->bind_param("i",$id);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();
		$stmt->close();

		return $fila['Es_Destacado'];


	}//function


	public function listarLocacionesParaActualizar($id){
			//LISTO LA LOCACION DEL EVENTO Y LA LISTO
			$stmt=$this->mysqli->prepare("SELECT EV.ID_Locacion, LOC.Descripcion
											  FROM evento EV JOIN locacion LOC ON EV.ID_Locacion=LOC.ID
											  WHERE EV.ID=(?)");

				$stmt->bind_param("i",$id);

				$stmt->execute();

				$resultado=$stmt->get_result();

				$fila['ID_Locacion']=0;

				while($fila=$resultado->fetch_assoc()){

					echo "<option value=".$fila['ID_Locacion']." selected>".$fila['Descripcion']."</option>"	;


				}//while
				//VUELVO A BUSCAR LA LOCACION DEL EVENTO EN CUESTION
				$stmt=$this->mysqli->prepare("SELECT EV.ID_Locacion, LOC.Descripcion
											  FROM evento EV JOIN locacion LOC ON EV.ID_Locacion=LOC.ID
											  WHERE EV.ID=(?)");

				$stmt->bind_param("i",$id);

				$stmt->execute();

				$resultado=$stmt->get_result();

				$fila=$resultado->fetch_assoc();

				//SELECCIONO TODAS LAS LOCACIONES QUE NO SON PROPIAS DEL EVENTO

				$stmt=$this->mysqli->prepare("SELECT *
										  FROM  locacion 
										  WHERE ID!=(?)
										  ");

				$stmt->bind_param("i",$fila['ID_Locacion']);

				$stmt->execute();

				$resultado=$stmt->get_result();

				//POR ULTIMO LAS LISTO

				while($fila2=$resultado->fetch_assoc()){

					echo "<option value=".$fila2['ID'].">
						  ".$fila2['Descripcion']."
						 </option>"	;


				}//while



	}//FUNCTION



	public function actualizarEvento($artista,$fecha,$copete,$descripcion,$linkTicket,$linkYoutube1,
									$linkFacebook1,$linkTwitter1,$linkInstragram1,$linkFacebook2,$linkTwitter2,$linkInstragram2,
									$imagenBig,$imagenMd,$imagenSm,$esPortada,$esDestacado,$locacion,$id){

		try{


			if($imagenBig!=''){
				//Renombrar archivos/campos
				$extension=pathinfo($imagenBig,PATHINFO_EXTENSION);

				$imagenBig=rand(100000000,999999999).".".$extension;

			}
			 if($imagenMd!=''){
				
				$extension=pathinfo($imagenMd,PATHINFO_EXTENSION);

				$imagenMd=rand(100000000,999999999).".".$extension;

			}

			 if($imagenSm!=''){

				$extension=pathinfo($imagenSm,PATHINFO_EXTENSION);

				$imagenSm=rand(100000000,999999999).".".$extension;

			}


			//ACTUALIZACION EN BD
			$stmt=$this->mysqli->prepare("UPDATE evento
										  SET Artista=(?),Fecha=(?),Copete=(?),Descripcion=(?),Link_Compra=(?),Link_Youtube_1=(?),
														Link_Facebook_1=(?),Link_Twitter_1=(?),Link_Instagram_1=(?),Link_Facebook_2=(?),
														Link_Twitter_2=(?),Link_Instagram_2=(?),Es_Destacado=(?),Es_Portada=(?),ID_Locacion=(?)
										  WHERE ID=(?)");

			$stmt->bind_param("ssssssssssssiiii",$artista,$fecha,htmlentities($copete, ENT_QUOTES, "UTF-8"),$descripcion,$linkTicket,$linkYoutube1,$linkFacebook1,$linkTwitter1,
																$linkInstragram1,$linkFacebook2,$linkTwitter2,$linkInstragram2,
																$esDestacado,$esPortada,$locacion,$id);
			$stmt->execute();

			
			echo "<h1 class='white-text'>El evento ha sido actualizado correctamente</h1>";



			try{

				if($imagenBig!=''){


					//Eliminar Imagen anterior

					//SELECCIONO NOMBRE DE IMAGEN
					$stmt=$this->mysqli->prepare("SELECT Img_Big
													FROM evento
													WHERE id=(?)");

					$stmt->bind_param("i",$id);

					$stmt->execute();

					$resultado=$stmt->get_result();

					$fila=$resultado->fetch_assoc();

					//Elimino el archivo fisico
					unlink("../imagenes/home/imagenesBig/".$fila['Img_Big']."");



					//CARGA DE IMAGENES EN CARPETA
					//carga imagenes Big
					$target_path = "../imagenes/home/imagenesBig/";
					$target_path = $target_path . $imagenBig;

					move_uploaded_file($_FILES['imagenBig']['tmp_name'], $target_path);


					//actualizamos la base de datos
					$stmt=$this->mysqli->prepare("UPDATE evento
													SET Img_Big=(?)
													WHERE id=(?)");

					$stmt->bind_param("si",$imagenBig,$id);

					$stmt->execute();


				}
				if($imagenMd!=''){

					//Eliminar Imagen anterior

					//SELECCIONO NOMBRE DE IMAGEN
					$stmt=$this->mysqli->prepare("SELECT Img_Md
													FROM evento
													WHERE id=(?)");

					$stmt->bind_param("i",$id);

					$stmt->execute();

					$resultado=$stmt->get_result();

					$fila=$resultado->fetch_assoc();

					//Elimino el archivo fisico
					unlink("../imagenes/home/imagenesMd/".$fila['Img_Md']."");



					//carga imagenes Medium
					$target_path = "../imagenes/home/imagenesMd/";
					$target_path = $target_path . $imagenMd;

					move_uploaded_file($_FILES['imagenMd']['tmp_name'], $target_path);

					//actualizamos la base de datos
					$stmt=$this->mysqli->prepare("UPDATE evento
													SET Img_Md=(?)
													WHERE id=(?)");

					$stmt->bind_param("si",$imagenMd,$id);

					$stmt->execute();
				}
				if($imagenSm!=''){


					//Eliminar Imagen anterior

					//SELECCIONO NOMBRE DE IMAGEN
					$stmt=$this->mysqli->prepare("SELECT Img_Sm
													FROM evento
													WHERE id=(?)");

					$stmt->bind_param("i",$id);

					$stmt->execute();

					$resultado=$stmt->get_result();

					$fila=$resultado->fetch_assoc();

					//Elimino el archivo fisico
					unlink("../imagenes/home/imagenesSm/".$fila['Img_Sm']."");


					//carga imagenes small
					$target_path = "../imagenes/home/imagenesSm/";
					$target_path = $target_path . $imagenSm;

					move_uploaded_file($_FILES['imagenSm']['tmp_name'], $target_path);

					//actualizamos la base de datos
					$stmt=$this->mysqli->prepare("UPDATE evento
													SET Img_Sm=(?)
													WHERE id=(?)");

					$stmt->bind_param("si",$imagenSm,$id);

					$stmt->execute();


				}
			

			}catch(Exception $e){

				echo "<h1 class='white-text'>¡Ups! Ha ocurrido un error mientras copiabamos los archivos a su carpeta : ",$e->getMessage(),"</h1>";
			
			}


		}catch(Exception $e){


			echo "<h1 class='white-text'>¡Ups! Ha ocurrido un error: ",$e->getMessage(),"</h1>";
		}



		$stmt->close();


	}//actualizarEvento


	public function eliminarEvento($id){
		try {
				$stmt=$this->mysqli->prepare("SELECT Img_Big,Img_Md,Img_Sm 
										   FROM evento
										   WHERE id=(?)");

				$stmt->bind_param("i",$id);

				$stmt->execute();

				$resultado=$stmt->get_result();

				$fila=$resultado->fetch_assoc();

				if($fila['Img_Big']!=''){
					unlink("../imagenes/home/imagenesBig/".$fila['Img_Big']."");
				}
				if($fila['Img_Md']!=''){
					unlink("../imagenes/home/imagenesMd/".$fila['Img_Md']."");
				}
				if($fila['Img_Sm']!=''){
					unlink("../imagenes/home/imagenesSm/".$fila['Img_Sm']."");
				}

				$stmt=$this->mysqli->prepare("DELETE 
											   FROM evento
											   WHERE id=(?)");

				$stmt->bind_param("i",$id);

				$stmt->execute();

				echo "<h1 class='white-text'>El evento ha <br> sido eliminado <br> correctamente</h1>";


		} catch (Exception $e) {

				echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";
			
		}


				$stmt->close();


	}//eliminarEvento

	public function actualizarToken($email,$token){

			$stmt=$this->mysqli->prepare("UPDATE admin SET Token=(?)WHERE usuario=(?)");

			$stmt->bind_param("ss",$token,$email);

			$stmt->execute();

			$stmt->close();



	}

	public function validarToken($token,$email){

		$stmt=$this->mysqli->prepare("SELECT Token
									  FROM admin
									  WHERE Token=(?) AND usuario=(?)");

		$stmt->bind_param("ss",$token,$email);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();

		if($fila==''){
			return FALSE;
		}else{
			return TRUE;
		}

		$stmt->close();

	}

	public function validarEmail($email){

		$stmt=$this->mysqli->prepare("SELECT usuario
									  FROM admin
									  WHERE usuario=(?)");

		$stmt->bind_param("s",$email);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();

		if($fila["usuario"]!=''){
			return TRUE;
		}else{
			return FALSE;
		}

		$stmt->close();

	}//function

	public function insertarContrasenia($email,$contrasenia){


			$stmt=$this->mysqli->prepare("UPDATE admin 
										  SET pass=(?)
										  WHERE usuario=(?)");

			$stmt->bind_param("ss",$contrasenia,$email);

			$stmt->execute();

			$stmt->close();

			echo " <h1 class='white-text'>¡Enhorabuena!<br> Has recuperado tu contraseña</h1>";


	}

	public function validarUsuario($email,$contrasenia){
		$stmt=$this->mysqli->prepare("SELECT pass
									  FROM admin
									  WHERE usuario=(?)");

		$stmt->bind_param("s",$email);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();

		if($fila["pass"]==$contrasenia){
			return TRUE;
		//	header("Location: home.php");

		}else{
			return FALSE;
		}

		$stmt->close();

	}//function

	public function listarLocaciones($seccion){

		
			$sql="SELECT *
				 FROM locacion ";



			$consulta=mysqli_query($this->conexion,$sql);

			if($seccion=='bajaLocacion'){

				while($fila=mysqli_fetch_assoc($consulta)){
				
							echo "<tr>
									<td>".utf8_encode($fila['Descripcion'])."</td>
									<td><a class='simple-link' href='bajaLocacionProcess.php?id=".$fila["ID"]."'>Eliminar</td>	
								</tr>";
							

				}//while
			}else if ($seccion=='altaEvento'){

				while($fila=mysqli_fetch_assoc($consulta)){
				
							echo "<option value=".$fila["ID"].">".utf8_encode($fila["Descripcion"])."</option>";
							

				}//while				
			}

		



	}//function


	public function bajaLocacion($id){

			try {
				$stmt=$this->mysqli->prepare("DELETE 
											   FROM locacion
											   WHERE ID=(?)");

				$stmt->bind_param("i",$id);

				$stmt->execute();

				echo("<h1 class='white-text'>Locacion eliminado con exito</h1>");

			} catch (Exception $e) {

				echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";
			
			}


				$stmt->close();


	}//bajaLocacion

	public function validarUsuarioParaReestablecerContrasena($email){
		$stmt=$this->mysqli->prepare("SELECT usuario
									  FROM admin
									  WHERE usuario=(?)");

		$stmt->bind_param("s",$email);

		$stmt->execute();

		$resultado=$stmt->get_result();

		$fila=$resultado->fetch_assoc();

		if($fila["usuario"]==''){
			return FALSE;
		}else{
			return TRUE;
		}

		$stmt->close();
	}

	public function listarPortadas(){

		try{
			$sql="SELECT *
				 FROM evento
				 where Es_Portada=1 AND es_historico=0
				 ORDER BY Fecha ASC
				 ";



			$consulta=mysqli_query($this->conexion,$sql);


			while($fila=mysqli_fetch_assoc($consulta)){
			
						echo "<div>
							<a href='".$fila['Link_Compra']."'><img src='imagenes/home/imagenesBig/".$fila["Img_Big"]."'></a>

							</div>";
						

			}//while


		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}

	}

	public function listarDestacados(){

		try{
			$sql="SELECT EVE.*,LOC.descripcion as locacion
				 FROM evento EVE JOIN locacion LOC ON EVE.ID_Locacion=LOC.ID
				 WHERE Es_Destacado=1 AND es_historico=0
				 ORDER BY Fecha ASC";



			$consulta=mysqli_query($this->conexion,$sql);



			while($fila=mysqli_fetch_assoc($consulta)){
						
						$date = new DateTime($fila['Fecha']);

						echo "<div class='col-sm-6 item_calafate'>
							      <a>
							        <div class='contenedor_overlay'>
									
							          <img src='imagenes/home/imagenesMd/".$fila['Img_Md']."' class='image' style='width:100%'>

							          <div class='middle descripcion_overlay'>

							            <div class='text'>

							              <div class='titulo_evento_destacado'>".$fila['Artista']."</div>

							              <a href='".$fila['Link_Compra']."' target='_blank' class='btn_carousel'><i class='fa fa-ticket' aria-hidden='true'></i> Comprar ticket</a>
							              
							              <a class='fecha_evento'>".str_replace("-","/",$date->format('d-m'))."</a>  <a class='lugar_evento'><i class='fa fa-map-marker' aria-hidden='true'></i>".$fila['locacion']."</a><br />
							            </div>

							          </div>

							        </div>

							        <div class='descripcion_eventosdestacados'>

							          <div>".$fila['Artista']."</div>

							          ".utf8_encode($fila['Copete'])."...
							          <br /><br />

							          <a href='#evento_".$fila['ID']."' class='link_mas_info fancybox shake'><span>+</span> Info</a>

							        </div>

							      </a>

							    </div>";
						

			}//while


		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}

		 


	}//listarDestacados

		public function listarAgendaDeEventos(){

		try{
			$sql="SELECT EVE.*,LOC.descripcion as locacion
				 FROM evento EVE JOIN locacion LOC ON EVE.ID_Locacion=LOC.ID
				 WHERE es_historico=0
				 ORDER BY Fecha ASC";



			$consulta=mysqli_query($this->conexion,$sql);

        

			while($fila=mysqli_fetch_assoc($consulta)){
						
						$date = new DateTime($fila['Fecha']);

						echo "<div class='item'>
					          <img src='imagenes/home/imagenesSm/".$fila['Img_Sm']."' class='img_full'>
					          <div class='descripcion_carousel'>
					            <div class='titulo_evento'>".utf8_encode($fila['Artista'])."</div>
					            <p></p>
					            <a class='fecha_evento'>".str_replace("-","/",$date->format('d-m'))."</a>  <a class='lugar_evento'><i class='fa fa-map-marker' aria-hidden='true'></i> ".utf8_encode($fila['locacion'])."</a><br />
					            <a href='#evento_".$fila['ID']."' class='link_mas_info fancybox'><span>+</span> Info</a>
					          </div>
					          <a href='".$fila['Link_Compra']."' target='_blank' class='btn_carousel'><i class='fa fa-ticket' aria-hidden='true'></i> Comprar ticket</a>
					        </div>";
						

			}//while


		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}

		 


	}//listarAgendaDeEventos

	public function listarGacetillas(){

		try{
			$sql="SELECT EVE.*,LOC.descripcion as locacion
				 FROM evento EVE JOIN locacion LOC ON EVE.ID_Locacion=LOC.ID
				 WHERE EVE.es_historico=0";

			$consulta=mysqli_query($this->conexion,$sql);

			while($fila=mysqli_fetch_assoc($consulta)){


						$dia = date("d",strtotime($fila['Fecha']));
						$mes = date("m",strtotime($fila['Fecha']));

						if($mes==01){
							$mes='ENERO';
						}else if($mes==02){
							$mes='FEBRERO';
						}else if($mes==03){
							$mes='MARZO';
						}else if($mes==04){
							$mes='ABRIL';
						}else if($mes==05){
							$mes='MAYO';
						}else if($mes==06){
							$mes='JUNIO';
						}else if($mes==07){
							$mes='JULIO';
						}else if($mes==08){
							$mes='AGOSTO';
						}else if($mes==09){
							$mes='SEPTIEMBRE';
						}else if($mes==10){
							$mes='OCTUBRE';
						}else if($mes==11){
							$mes='NOVIEMBRE';
						}else if($mes==12){
							$mes='FEBRERO';
						}

						echo "
								<div id='evento_".$fila['ID']."' class='popup_evento'>
								  <h2 class='titulos'><span>".$fila['Artista']."</span></h2>
								  <div class='row'>
								    <div class='col-sm-8 gacetillas-cont'>
								      ".utf8_encode($fila['Descripcion'])."<br><br>

								      <div class='compartir_redes'>
								        <span>SEGUILO EN </span>
								      ";



						if($fila['Link_Facebook_1']!=''){

							echo "<a href='".$fila['Link_Facebook_1']."' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Facebook_2']!=''){

							echo "<a href='".$fila['Link_Facebook_2']."' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i></a>";

						}	


						if($fila['Link_Twitter_1']!=''){

							echo "<a href='".$fila['Link_Twitter_2']."' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Twitter_2']!=''){

							echo "<a href='".$fila['Link_Twitter_2']."' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Instagram_1']!=''){

							echo "<a href='".$fila['Link_Instagram_1']."' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Instagram_2']!=''){

							echo "<a href='".$fila['Link_Instagram_2']."' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i></a>";

						}
								        
						echo "</div>
								    </div>";
	      
					    echo "<div class='col-sm-4'>
    					      <div class='fecha_popup'>
    					        <div class='dia_popup'>".$dia."</div>";

						echo "<div class='texto_popup'>
								          DE ".utf8_encode($mes)."<br />
								          <span>".utf8_encode($fila['locacion'])."</span>
								        </div>
								        <div class='clearfix'></div>
								      </div>
								      <a href='".$fila['Link_Compra']."' target='_blank' class='btn_carousel'><i class='fa fa-ticket' aria-hidden='true'></i> Comprar ticket</a>
								    </div>
								  </div>
								 ";


						if($fila['Link_Youtube_1']!=''){
						echo "<div class='video_popup'>
								    <iframe width='100%' height='315' src='".$fila['Link_Youtube_1']."' frameborder='0' allowfullscreen></iframe>
								  </div>
								</div>";

						}		  

						echo " </div>";
								  
						

			}//while


		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}



	}//listarGacetillas
	public function listarGacetillaDeEventosAnteriores(){

		try{
			$sql="SELECT EVE.*,LOC.descripcion as locacion
				 FROM evento EVE JOIN locacion LOC ON EVE.ID_Locacion=LOC.ID
				 WHERE EVE.es_historico=1";

			$consulta=mysqli_query($this->conexion,$sql);

			while($fila=mysqli_fetch_assoc($consulta)){


						$dia = date("d",strtotime($fila['Fecha']));
						$mes = date("m",strtotime($fila['Fecha']));

						if($mes==01){
							$mes='ENERO';
						}else if($mes==02){
							$mes='FEBRERO';
						}else if($mes==03){
							$mes='MARZO';
						}else if($mes==04){
							$mes='ABRIL';
						}else if($mes==05){
							$mes='MAYO';
						}else if($mes==06){
							$mes='JUNIO';
						}else if($mes==07){
							$mes='JULIO';
						}else if($mes==08){
							$mes='AGOSTO';
						}else if($mes==09){
							$mes='SEPTIEMBRE';
						}else if($mes==10){
							$mes='OCTUBRE';
						}else if($mes==11){
							$mes='NOVIEMBRE';
						}else if($mes==12){
							$mes='FEBRERO';
						}

						echo "
								<div id='evento_".$fila['ID']."' class='popup_evento'>
								  <h2 class='titulos'><span>".$fila['Artista']."</span></h2>
								  <div class='row'>
								    <div class='col-sm-8 gacetillas-cont'>
								      ".utf8_encode($fila['Descripcion'])."<br><br>

								      <div class='compartir_redes'>
								        <span>SEGUILO EN </span>
								      ";



						if($fila['Link_Facebook_1']!=''){

							echo "<a href='".$fila['Link_Facebook_1']."' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Facebook_2']!=''){

							echo "<a href='".$fila['Link_Facebook_2']."' target='_blank'><i class='fa fa-facebook' aria-hidden='true'></i></a>";

						}	


						if($fila['Link_Twitter_1']!=''){

							echo "<a href='".$fila['Link_Twitter_2']."' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Twitter_2']!=''){

							echo "<a href='".$fila['Link_Twitter_2']."' target='_blank'><i class='fa fa-twitter' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Instagram_1']!=''){

							echo "<a href='".$fila['Link_Instagram_1']."' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i></a>";

						}

						if($fila['Link_Instagram_2']!=''){

							echo "<a href='".$fila['Link_Instagram_2']."' target='_blank'><i class='fa fa-instagram' aria-hidden='true'></i></a>";

						}
								        
						echo "</div>
								    </div>";
	      
					    echo "<div class='col-sm-4'>
    					      <div class='fecha_popup'>
    					        <div class='dia_popup'>".$dia."</div>";

						echo "<div class='texto_popup'>
								          DE ".utf8_encode($mes)."<br />
								          <span>".utf8_encode($fila['locacion'])."</span>
								        </div>
								        <div class='clearfix'></div>
								      </div>
								      <a href='".$fila['Link_Compra']."' target='_blank' class='btn_carousel'><i class='fa fa-ticket' aria-hidden='true'></i> Comprar ticket</a>
								    </div>
								  </div>
								 ";


						if($fila['Link_Youtube_1']!=''){
						echo "<div class='video_popup'>
								    <iframe width='100%' height='315' src='".$fila['Link_Youtube_1']."' frameborder='0' allowfullscreen></iframe>
								  </div>
								</div>";

						}		  

						echo " </div>";
								  
						

			}//while


		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}



	}//listarGacetillas

	public function listarEventosAnteriores(){

		try{
			$sql="SELECT EVE.*,LOC.descripcion as locacion
				 FROM evento EVE JOIN locacion LOC ON EVE.ID_Locacion=LOC.ID
				 WHERE es_historico=1
				 ORDER BY Fecha ASC";



			$consulta=mysqli_query($this->conexion,$sql);

        

			while($fila=mysqli_fetch_assoc($consulta)){
				



						$date = new DateTime($fila['Fecha']);

				$img='"imagenes/home/imagenesSm/'.$fila['Img_Sm'].'"';
				echo "<div class='item carousel_empresa' style='background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(".$img."); background-size: cover;'>
		              <div class='descripcion_carousel'>
					            <div class='titulo_evento'>".utf8_encode($fila['Artista'])."</div>
					            <p></p>
					            <a class='fecha_evento'>".str_replace("-","/",$date->format('d-m'))."</a>  <a class='lugar_evento'><i class='fa fa-map-marker' aria-hidden='true'></i> ".utf8_encode($fila['locacion'])."</a><br />
					            <a href='#evento_".$fila['ID']."' class='link_mas_info fancybox'><span>+</span> Info</a>
					          </div>
					        </div>";



					
						

			}//while





		}catch(Exception $e){

			echo "¡Ups! Ha ocurrido un error: ",$e->getMessage(),"";

		}

	}//listarAgendaDeEventosEnSeccionProductora

	public function actualizarAHistoricos(){



		$sql="UPDATE evento
				SET es_historico=1
			  WHERE Fecha < NOW()
			  ";



		$consulta=mysqli_query($this->conexion,$sql);

	}





}//class
 ?>
