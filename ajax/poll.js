function getVote(int){
	if (window.XMLHttpRequest){
		//code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { //code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHttpRequest");
	}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("poll").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "poll_vote.php?vote="+int, true);
	xmlhttp.send();
}

function getVoteSecond(int){
	if (window.XMLHttpRequest){
		//code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { //code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHttpRequest");
	}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("poll-2").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "poll_2_vote.php?vote_opinion="+int, true);
	xmlhttp.send();
}

function getVoteQuestion(int){
	if (window.XMLHttpRequest){
		//code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else { //code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHttpRequest");
	}
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("poll-3").innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET", "poll_question.php?vote_question="+int, true);
	xmlhttp.send();
}