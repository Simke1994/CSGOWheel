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


jQuery(function ($) {
    var $owl = $('.owl-carousel');
    const sekunde = setInterval(rulettimer, 1000,$owl);
    var parent = document.getElementById('images'),
    imagePath,
    img;
    var tpobedio = 0,
        ctpobedio = 0,
        kpobedio = 0;
        
    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 5,
        nav: false,
        mouseDrag: false,
        touchDrag: false,
        pullDrag: false,
        dots: false,
        responsive: {
            0: {
                items: 3
            },
            600: {
                items: 3
            },
            1000: {
                items:10
            }
        }
    });
    
    $owl.on('changed.owl.carousel', function (e) {
        if (stoping) {
            var index = e.item.index;
            var element = $(e.target).find(".owl-item").eq(index).find('.element-roulette');
            var item = element.data('item');
            if (item == itemSelected) {
                $owl.trigger('stop.owl.autoplay');
                if (item == 1 || item == 3 || item == 6 || item == 8 || item == 10) {
                    tpobede++;tp=1;
                    document.getElementById("t1001").innerHTML = tpobede;
                    img = new Image();
                    img.src = 'slike/2teror.png';
                    parent.appendChild(img);
                }
                else if (item == 2 || item == 4 || item == 7 || item == 9 || item == 11) {
                    ctpobede++;ctp=1;
                    document.getElementById("t1003").innerHTML = ctpobede;
                    img = new Image();
                    img.src = 'slike/ct3.png';
                    parent.appendChild(img);
                }
                else if (item == 5) {
                    kpobede++;kp=1;
                    document.getElementById("t1002").innerHTML = kpobede;
                    img = new Image();
                    img.src = 'slike/x14.png';
                    parent.appendChild(img);
                }
            }
        }
    });
    

});
function rulettimer($owl) {
    sekundice-=1;
    if(sekundice >0){
        document.getElementById("tajmer").innerHTML = sekundice;
    }
    else if(sekundice ==0){
        $owl.trigger('play.owl.autoplay', [50]);
        itemSelected = Math.floor((Math.random() * 11) + 1);
        stoping = false;
        setTimeout(slowSpeed, 500, $owl, 80);
        setTimeout(slowSpeed, 1000, $owl, 110);
        setTimeout(slowSpeed, 1500, $owl, 130);
        setTimeout(slowSpeed, 2000, $owl, 140);
        setTimeout(slowSpeed, 2500, $owl, 150);
        setTimeout(slowSpeed, 3000, $owl, 160);
        setTimeout(slowSpeed, 3500, $owl, 170);
        setTimeout(slowSpeed, 4000, $owl, 180);
        setTimeout(slowSpeed, 4500, $owl, 200);
        setTimeout(stopAutoplay, 5000);
        //setTimeout(dodela, 5000);
        setTimeout(kraj, 11000);
        document.getElementById("tajmer").innerHTML = "";
        document.getElementById("okvir").style.display = "none";
        document.getElementById("ctulog").setAttribute('disabled','disabled');
        document.getElementById("tulog").setAttribute('disabled','disabled');
        document.getElementById("kockaulog").setAttribute('disabled','disabled');
        document.getElementById("ctulog").style.cursor = "not-allowed";
        document.getElementById("tulog").style.cursor = "not-allowed";
        document.getElementById("kockaulog").style.cursor = "not-allowed";
    }
    else if(sekundice == -10){
        setTimeout(deleteUlogct, 1000);
        setTimeout(deleteUlogk, 1000);
        setTimeout(deleteUlogt, 1000);
    }
    else if(sekundice ==-11){
        document.getElementById("okvir").style.display = "block";
        document.getElementById("ctulog").removeAttribute('disabled');
        document.getElementById("tulog").removeAttribute('disabled');
        document.getElementById("kockaulog").removeAttribute('disabled');
        document.getElementById("ctulog").style.cursor = "pointer";
        document.getElementById("tulog").style.cursor = "pointer";
        document.getElementById("kockaulog").style.cursor = "pointer";
        sekundice=20;
    }
}
function kreni($owl) {
    $owl.trigger('play.owl.autoplay', [100]);
}
function slowSpeed($owl, speed) {
    $owl.trigger('play.owl.autoplay', [speed]);
}

function stopAutoplay() {
    stoping = true;
}

function kraj() {
    kulog=0;
    ctulog=0;
    tulog=0;
    bets=0;
    betsct=0;
    betsk=0;
    betst=0;
    document.getElementById("ctulog").innerHTML = "2 x ";
    document.getElementById("tulog").innerHTML = "2 x ";
    document.getElementById("kockaulog").innerHTML = "14 x ";
    document.getElementById("ulozi1").innerHTML = "<p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:66%;'> 0</p>";
    document.getElementById("ulozi2").innerHTML = "<p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:66%;'> 0</p>";
    document.getElementById("ulozi3").innerHTML = "<p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:66%;'> 0</p>";
} 

function UlogCT(){
    var x = document.getElementById("polje").value;
    //var prvibet = 0;
    //var ukupnoct = 0;
    if(x>0){
        bets++;
        if(bets<3){
            ctulog=x;betsct++;
            document.getElementById("ctulog").innerHTML = "2 x " + ctulog + " <img src='slike/coins.png'>";
            document.getElementById("ulozi1").innerHTML = "<p style='font-style:italic;font-size:14px;'>" + betsct + " uloga <img src='slike/coins.png' style='margin-left:63%;'> " + x + "</p>";
            
            var message = $("#polje").val();
    		$.post('ulogkonf.php?action=PostaviUlogct&message='+message, function(response){
    			loadUlogct();
    		});
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
            document.getElementById("kockaulog").innerHTML = "14 x " + kulog + " <img src='slike/coins.png'>";
            document.getElementById("ulozi2").innerHTML = "<p style='font-style:italic;font-size:14px;'>" + betsk + " uloga <img src='slike/coins.png' style='margin-left:63%;'> " + x + "</p>";
            
            var message = $("#polje").val();
    		$.post('ulogkonf.php?action=PostaviUlogk&message='+message, function(response){
    			loadUlogk();
    		});
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
            document.getElementById("tulog").innerHTML = "2 x " + tulog + " <img src='slike/coins.png'>";
            document.getElementById("ulozi3").innerHTML = "<p style='font-style:italic;font-size:14px;'>" + betst + " uloga <img src='slike/coins.png' style='margin-left:63%;'> " + x + "</p>";
            
            var message = $("#polje").val();
    		$.post('ulogkonf.php?action=PostaviUlogt&message='+message, function(response){
    			loadUlogt();
    		});
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

$(document).ready(function(){
	loadUlogct();
	loadUlogk();
	loadUlogt();
});

function loadUlogct()
{
	$.post('ulogkonf.php?action=PokaziUlogct', function(response){
		$('#pkulo1').html(response);
	});
}

function loadUlogk()
{
	$.post('ulogkonf.php?action=PokaziUlogk', function(response){
		$('#pkulo2').html(response);
	});
}

function loadUlogt()
{
	$.post('ulogkonf.php?action=PokaziUlogt', function(response){
		$('#pkulo3').html(response);
	});
}

setInterval(function(){
	loadUlogct();
	loadUlogk();
	loadUlogt();
}, 1000);