<?php
$enlace = mysqli_connect('localhost', 'root', '', 'softdev') 
or die(mysql_error($mysqli));

insertar($enlace);

function insertar($enlace){
    $tipoPlanes = $_POST['tipoPlanes'];
    $prom = $_POST['prom'];
    $fechanaci = $_POST['fechanaci'];
    $sex = $_POST['sex'];
    $habl = $_POST['habl'];
    $prov = $_POST['prov'];
    $estadociv = $_POST['estadociv'];
    $hijo = $_POST['hijo'];
    $disca = $_POST['disca'];
    $escolariPadre = $_POST['escolariPadre'];
    $escolariMadre = $_POST['escolariMadre'];
    $ocupaPadre = $_POST['ocupaPadre'];
    $ocupaMadre = $_POST['ocupaMadre'];
    $estudi = $_POST['estudi'];
    $escuelanomb = $_POST['escuelanomb'];
    $añosBach = $_POST['añosBach'];
    $trabaja = $_POST['trabaja'];
    $depende = $_POST['depende'];
    $razonTrabaj = $_POST['razonTrabaj'];
    $horasTrabaj = $_POST['horasTrabaj'];
    $relaciTrabaj = $_POST['relaciTrabaj'];
    $espaciEstudi = $_POST['espaciEstudi'];
    $equiComputo = $_POST['equiComputo'];
    $intern = $_POST['intern'];
    $libroEspeciali = $_POST['libroEspeciali'];
    $encicloDiccion = $_POST['encicloDiccion'];
    $imporEstudios = $_POST['imporEstudios'];
    $recurEconomicos = $_POST['recurEconomicos'];
    $medioTranspor = $_POST['medioTranspor'];
    $tiempoTraslad = $_POST['tiempoTraslad'];
    $admiInstitucion = $_POST['admiInstitucion'];
    $alternaIngresa = $_POST['alternaIngresa'];
    $existirUniver = $_POST['existirUniver'];
    $televi = $_POST['televi'];
    $radio = $_POST['radio'];
    $periodico = $_POST['periodico'];
    $internet = $_POST['internet'];
    $volanTripti = $_POST['volanTripti'];
    $personalUT = $_POST['personalUT'];
    $visitUniversi = $_POST['visitUniversi'];
    $orientVacaci = $_POST['orientVacaci'];
    $recomenda = $_POST['recomenda'];
    $converMaes = $_POST['converMaes'];
    $compeProfeci = $_POST['compeProfeci'];
    $duraciCarrera = $_POST['duraciCarrera'];
    $practiEstadias = $_POST['practiEstadias'];
    $oportuEmpleo = $_POST['oportuEmpleo'];
    $equipaTecnologi = $_POST['equipaTecnologi'];
    $preparaProfe = $_POST['preparaProfe'];
    $intercamEstudi = $_POST['intercamEstudi'];
    $costos = $_POST['costos'];
    $apoyoUniver = $_POST['apoyoUniver'];
    $licenciProfesion = $_POST['licenciProfesion'];
    $ofreIngeni = $_POST['ofreIngeni'];
    $areaDesarrollarte = $_POST['areaDesarrollarte'];
    $prestiSocial = $_POST['prestiSocial'];
    $economico = $_POST['economico'];
    $concluirTSU = $_POST['concluirTSU'];
    $obtEmpleo = $_POST['obtEmpleo'];
    $trabajaPreparaste = $_POST['trabajaPreparaste'];
    $mejorIngre = $_POST['mejorIngre'];
    $desaPersoProfeci = $_POST['desaPersoProfeci'];
    $infoProfesores = $_POST['infoProfesores'];
    $experPrevias = $_POST['experPrevias'];
    $materItegrar = $_POST['materItegrar'];
    $aclararDudas = $_POST['aclararDudas'];
    $reafirConoci = $_POST['reafirConoci'];
    $planteaPreguntas = $_POST['planteaPreguntas'];
    $puntVista = $_POST['puntVista'];
    $estrateguias = $_POST['estrateguias'];
    $estrateEstudio = $_POST['estrateEstudio'];
    $nuevaforEstudi = $_POST['nuevaforEstudi'];
    $apuntes = $_POST['apuntes'];
    $compañeEquipo = $_POST['compañeEquipo'];
    $actAcademicas = $_POST['actAcademicas'];
    $mejoresResulta = $_POST['mejoresResulta'];
    $acuerCompañeros = $_POST['acuerCompañeros'];
    $compuElaboTareas = $_POST['compuElaboTareas'];
    $textIngles = $_POST['textIngles'];
    $biblioProfesor = $_POST['biblioProfesor'];
    $bibliograBiblioteca = $_POST['bibliograBiblioteca'];
    $buscaInternet = $_POST['buscaInternet'];
    $sitiosOnline = $_POST['sitiosOnline'];
    $sitiosWeb = $_POST['sitiosWeb'];
    $horasBachillerato = $_POST['horasBachillerato'];
    $conviviFamilia = $_POST['conviviFamilia'];
    $conviviAmigos = $_POST['conviviAmigos'];
    $practDeporte = $_POST['practDeporte'];
    $trabaj = $_POST['trabaj'];
    $verTv = $_POST['verTv'];
    $lectActualidad = $_POST['lectActualidad'];
    $lectLiteraria = $_POST['lectLiteraria'];
    $lectOcio = $_POST['lectOcio'];
    $juegVideo = $_POST['juegVideo'];
    $redSociales = $_POST['redSociales'];
    $navegInternet = $_POST['navegInternet'];
    $escuchMusica = $_POST['escuchMusica'];
    $actArtistic = $_POST['actArtistic'];


    $music = $_POST['music'];
    $danza = $_POST['danza'];
    $teatro = $_POST['teatro'];
    $artePlasticas = $_POST['artePlasticas'];
    $cineClub = $_POST['cineClub'];
    $circLectura = $_POST['circLectura'];
    $otraActivi = $_POST['otraActivi'];

    $futbolSoccer = $_POST['futbolSoccer'];
    $futbolRapido = $_POST['futbolRapido'];
    $basquetbol = $_POST['basquetbol'];
    $voleibol = $_POST['voleibol'];
    $atletismo = $_POST['atletismo'];
    $ajedrez = $_POST['ajedrez'];
    $acondicioFisico = $_POST['acondicioFisico'];
    $otroDeporte = $_POST['otroDeporte'];

    $cineEvento = $_POST['cineEvento'];
    $teatroEvento = $_POST['teatroEvento'];
    $danzaEvento = $_POST['danzaEvento'];
    $expoPinturaEvento = $_POST['expoPinturaEvento'];
    $precentaLibros = $_POST['precentaLibros'];
    $museosEvento = $_POST['museosEvento'];
    $conciertoMusicaClasica = $_POST['conciertoMusicaClasica'];
    $conferenciaEvento = $_POST['conferenciaEvento'];
    $conciertoMusicaPopular = $_POST['conciertoMusicaPopular'];
    $feriPatronalRegional = $_POST['feriPatronalRegional'];
    $fiestaAmigos = $_POST['fiestaAmigos'];
    $evenDeportivos = $_POST['evenDeportivos'];

    $comunidad = $_POST['comunidad'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    $motivoMudasteComunidad = $_POST['motivoMudasteComunidad'];
    $motivoMudasteEstado = $_POST['motivoMudasteEstado'];
    $motivoMudastePais = $_POST['motivoMudastePais'];


    $insert_pregun = "INSERT INTO pregunta
    (tipoPlanes, prom, fechanaci, sex, habl, prov, estadociv, hijo, disca, escolariPadre, escolariMadre,
    ocupaPadre, ocupaMadre, estudi, escuelanomb, añosBach, trabaja, depende, razonTrabaj, horasTrabaj,relaciTrabaj,
    espaciEstudi,equiComputo,intern,libroEspeciali,encicloDiccion,imporEstudios,recurEconomicos,medioTranspor,
    tiempoTraslad,admiInstitucion,alternaIngresa,existirUniver,televi,radio,periodico,internet,volanTripti,
    personalUT,visitUniversi,orientVacaci,recomenda,converMaes,compeProfeci,duraciCarrera,practiEstadias,
    oportuEmpleo,equipaTecnologi,preparaProfe,intercamEstudi,costos,apoyoUniver,licenciProfesion,ofreIngeni,
    areaDesarrollarte,prestiSocial,economico,concluirTSU,obtEmpleo,trabajaPreparaste,mejorIngre,desaPersoProfeci,
    infoProfesores,experPrevias,materItegrar,aclararDudas,reafirConoci,planteaPreguntas,puntVista,estrateguias,
    estrateEstudio,nuevaforEstudi,apuntes,compañeEquipo,actAcademicas,mejoresResulta,acuerCompañeros,
    compuElaboTareas,textIngles,biblioProfesor,bibliograBiblioteca,buscaInternet,sitiosOnline,sitiosWeb,
    horasBachillerato,conviviFamilia,conviviAmigos,practDeporte,trabaj,verTv,lectActualidad,lectLiteraria,lectOcio,
    juegVideo,redSociales,navegInternet,escuchMusica,actArtistic,music,danza,teatro,artePlasticas,cineClub,
    circLectura,otraActivi,futbolSoccer,futbolRapido,basquetbol,voleibol,atletismo,ajedrez,acondicioFisico,
    otroDeporte,cineEvento,teatroEvento,danzaEvento,expoPinturaEvento,precentaLibros,museosEvento,conciertoMusicaClasica,
    conferenciaEvento,conciertoMusicaPopular,feriPatronalRegional,fiestaAmigos,evenDeportivos,comunidad,estado,
    pais,motivoMudasteComunidad,motivoMudasteEstado,motivoMudastePais)
    VALUES
    ('$tipoPlanes', '$prom', '$fechanaci', '$sex', '$habl', '$prov', '$estadociv', '$hijo', '$disca',
    '$escolariPadre', '$escolariMadre', '$ocupaPadre', '$ocupaMadre', '$estudi', '$escuelanomb',
    '$añosBach', '$trabaja', '$depende', '$razonTrabaj', '$horasTrabaj', '$relaciTrabaj','$espaciEstudi',
    '$equiComputo','$intern','$libroEspeciali','$encicloDiccion','$imporEstudios','$recurEconomicos',
    '$medioTranspor','$tiempoTraslad','$admiInstitucion','$alternaIngresa','$existirUniver','$televi',
    '$radio','$periodico','$internet','$volanTripti','$personalUT','$visitUniversi','$orientVacaci','$recomenda',
    '$converMaes','$compeProfeci','$duraciCarrera','$practiEstadias','$oportuEmpleo','$equipaTecnologi',
    '$preparaProfe','$intercamEstudi','$costos','$apoyoUniver','$licenciProfesion','$ofreIngeni',
    '$areaDesarrollarte','$prestiSocial','$economico','$concluirTSU','$obtEmpleo','$trabajaPreparaste',
    '$mejorIngre','$desaPersoProfeci','$infoProfesores','$experPrevias','$materItegrar','$aclararDudas',
    '$reafirConoci','$planteaPreguntas','$puntVista','$estrateguias','$estrateEstudio','$nuevaforEstudi','$apuntes',
    '$compañeEquipo','$actAcademicas','$mejoresResulta','$acuerCompañeros','$compuElaboTareas','$textIngles',
    '$biblioProfesor','$bibliograBiblioteca','$buscaInternet','$sitiosOnline','$sitiosWeb','$horasBachillerato',
    '$conviviFamilia','$conviviAmigos','$practDeporte','$trabaj','$verTv','$lectActualidad','$lectLiteraria',
    '$lectOcio','$juegVideo','$redSociales','$navegInternet','$escuchMusica','$actArtistic','$music','$danza',
    '$teatro','$artePlasticas','$cineClub','$circLectura','$otraActivi','$futbolSoccer','$futbolRapido','$basquetbol',
    '$voleibol','$atletismo','$ajedrez','$acondicioFisico','$otroDeporte','$cineEvento','$teatroEvento',
    '$danzaEvento','$expoPinturaEvento','$precentaLibros','$museosEvento','$conciertoMusicaClasica','$conferenciaEvento',
    '$conciertoMusicaPopular','$feriPatronalRegional','$fiestaAmigos','$evenDeportivos','$comunidad','$estado',
    '$pais','$motivoMudasteComunidad','$motivoMudasteEstado','$motivoMudastePais')";

$resultado=mysqli_query($enlace, $insert_pregun);
    if($insert_pregun == true)
	echo '<script language="javascript">
    alert("Datos agregados correctamente");
	window.location.href="finncuesta.html";
	      </script>';
		  
else 
	echo '<script language="javascript">
    elert("Imposible realizar la accion..");
	window.location.href="../prueba_preg.php";
	      </script>';

    
   mysqli_close($enlace);
}

?>