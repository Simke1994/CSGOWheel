var sekundice = 20,
    stoping = false,
    itemSelected = 0,
    rolaj,
    ctpobede = 0,
    tpobede = 0,
    kpobede = 0,
    betsct = 0,
    betst = 0,
    betsk = 0,
    bets=0,
    kp = 0,
    tp = 0,
    ctp = 0,
    kulog=0,
    ctulog=0,
    tulog=0;

const sekunde = setInterval(rulettimer, 1000);

function rulettimer() {
    var parent = document.getElementById('images'),
    imagePath,
    img;

    sekundice-=1;
    if(sekundice >0){
        document.getElementById("tajmer").innerHTML = sekundice;
    }
    else if(sekundice ==0){
        let container = document.querySelector(".containertocak");
        let btn = document.getElementById("spin");
        let number = Math.ceil(Math.random() * 16000);

        container.style.transform = "rotate(" + number + "deg)";
        number += Math.ceil(Math.random() * 16000);
        //setTimeout(dodela, 5000);
        //setTimeout(kraj, 11000);
        document.getElementById("tajmer").innerHTML = "";
        document.getElementById("timer").style.display = "none";
        document.getElementById("ulogc").setAttribute('disabled','disabled');
        document.getElementById("ulogp").setAttribute('disabled','disabled');
        document.getElementById("ulogzu").setAttribute('disabled','disabled');
        document.getElementById("ulogze").setAttribute('disabled','disabled');
        document.getElementById("ulogc").style.cursor = "not-allowed";
        document.getElementById("ulogp").style.cursor = "not-allowed";
        document.getElementById("ulogzu").style.cursor = "not-allowed";
        document.getElementById("ulogze").style.cursor = "not-allowed";
    }
    else if(sekundice == -5){
        img = new Image();
        img.src = 'slike/zuto.png';
        parent.appendChild(img);
    }
    else if(sekundice == -10){
        setTimeout(deleteUlogct, 1000);
        setTimeout(deleteUlogk, 1000);
        setTimeout(deleteUlogt, 1000);
    }
    else if(sekundice ==-11){
        document.getElementById("timer").style.display = "block";
        document.getElementById("ulogc").removeAttribute('disabled');
        document.getElementById("ulogp").removeAttribute('disabled');
        document.getElementById("ulogzu").removeAttribute('disabled');
        document.getElementById("ulogze").removeAttribute('disabled');
        document.getElementById("ulogc").style.cursor = "pointer";
        document.getElementById("ulogp").style.cursor = "pointer";
        document.getElementById("ulogzu").style.cursor = "pointer";
        document.getElementById("ulogze").style.cursor = "pointer";
        sekundice=20;
    }
}

/*function kraj() {
    kulog=0;
    ctulog=0;
    tulog=0;
    bets=0;
    betsct=0;
    betsk=0;
    betst=0;
    document.getElementById("ctbroj").innerHTML = "2 x ";
    document.getElementById("tbroj").innerHTML = "2 x ";
    document.getElementById("kbroj").innerHTML = "14 x ";
    document.getElementById("ulozi1").innerHTML = "<p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:66%;'> 0</p>";
    document.getElementById("ulozi2").innerHTML = "<p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:66%;'> 0</p>";
    document.getElementById("ulozi3").innerHTML = "<p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:66%;'> 0</p>";
} */

function UlogCT(){
    var x = document.getElementById("polje").value;
    //var prvibet = 0;
    //var ukupnoct = 0;
    if(x>0){
        bets++;
        if(bets<3){
            ctulog=x;betsct++;
            document.getElementById("ctbroj").innerHTML = "2 x " + ctulog + " <img src='slike/coins.png'>";
            document.getElementById("ulozi1").innerHTML = "<p style='font-style:italic;font-size:14px;'>" + betsct + " uloga <img src='slike/coins.png' style='margin-left:63%;'> " + x + "</p>";
        }else{
            document.getElementById("mojmodal").style.display = "block";
            document.getElementById("ekran").style.opacity = "0.5";
        }
    }else{
        alert("Vas ulog mora da bude veci od 0 novcica!");
    }
}
function UlogKocka(){
    var x = document.getElementById("polje").value; 
    if(x>0){
        bets++;
        if(bets<3){
            kulog=x;betsk++;
            document.getElementById("kbroj").innerHTML = "14 x " + kulog + " <img src='slike/coins.png'>";
            document.getElementById("ulozi2").innerHTML = "<p style='font-style:italic;font-size:14px;'>" + betsk + " uloga <img src='slike/coins.png' style='margin-left:63%;'> " + x + "</p>";
        }else{
            document.getElementById("mojmodal").style.display = "block";
            document.getElementById("ekran").style.opacity = "0.5";
        }
    }else{
        alert("Vas ulog mora da bude veci od 0 novcica!");
    }
}
function UlogTeror(){
    var x = document.getElementById("polje").value; 
    if(x>0){
        bets++;
        if(bets<3){
            tulog=x;betst++;
            document.getElementById("tbroj").innerHTML = "2 x " + tulog + " <img src='slike/coins.png'>";
            document.getElementById("ulozi3").innerHTML = "<p style='font-style:italic;font-size:14px;'>" + betst + " uloga <img src='slike/coins.png' style='margin-left:63%;'> " + x + "</p>";
        }else{
            document.getElementById("mojmodal").style.display = "block";
            document.getElementById("ekran").style.opacity = "0.5";
        }
    }else{
        alert("Vas ulog mora da bude veci od 0 novcica!");
    }
}

/*function dodela() {
    let novostanje=0;
    let stanje;
    if(ctp==1){
        //novostanje = ctulog*2;
        document.getElementById("stanje2").innerHTML = stanje+novostanje;
    }
    else if(tp==1){
        novostanje = tulog*2;
        document.getElementById("stanje2").innerHTML = stanje+novostanje;
    }
    else if(kp==1){
        novostanje = ulogkocka*14;
        document.getElementById("stanje2").innerHTML = stanje+novostanje;
    }
}*/

function deleteUlogct()
{
	$.post('./ulogkonf.php?action=BrisiUlogct', function(response){
		$('#pkulo1').html(response);
	});
}

function deleteUlogk()
{
	$.post('./ulogkonf.php?action=BrisiUlogk', function(response){
		$('#pkulo1').html(response);
	});
}

function deleteUlogt()
{
	$.post('./ulogkonf.php?action=BrisiUlogt', function(response){
		$('#pkulo1').html(response);
	});
}