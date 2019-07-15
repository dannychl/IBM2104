<script>
		var ratedIndex = -1;
		var cID =0;
		var uID =0; 
		$(document).ready(function(){
			resetStarColors();
			
			if(localStorage.getItem('ratedIndex')!= null){
				setStars(parseInt(localStorage.getItem('ratedIndex')));
				cID = localStorage.getItem('cID');
				uID = localStorage.getItem('uID');
			}
			
			$('.fa-star').on('click', function(){
				ratedIndex = parseInt($(this).data('index'));
				localStorage.setItem('ratedIndex', ratedIndex);
				alert("user id: " + uID + "\ncollege id: " + cID);
				saveToTheDB();
			});
			
			$('.fa-star').mouseover(function(){
				resetStarColors();
				var currentIndex = parseInt($(this).data('index'));
				setStars(currentIndex);
			});
		
			$('.fa-star').mouseleave(function(){
				resetStarColors();
				
				if (ratedIndex !=-1)
						setStars(ratedIndex);
			});
		});
		function saveToTheDB(){
			alert("user id: " + uID + "\ncollege id: " + cID);
			$.ajax({
				url:"rating1.php?uid="+uID+"&cid=" + cID,
				method: "POST",
				dataType: 'json',
				data: {
					save: true,
					uID: uID,
					ratedIndex: ratedIndex
				}, success :function(r){
					uID = r.id;
					localStorage.setItem('uID',uID);
				}
				});
		}
		
		function setStars(max){
			for (var i=0; i<=max; i++)
				$('.fa-star:eq('+i+')').css('color', 'yellow');
		}
		function resetStarColors(){
			$('.fa-star').css('color','white');
		}
	</script>