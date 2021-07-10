
<?php
include 'main.php';
?>

<main>
  <div class="row g-5">
    <div class="col-md-8">
      	<section id="p_2">
	        <h2 class="blog-post-title">Problem No. 3</h2>
	        <p class="mb-0"> <strong> Print Tree</strong></p>
			<p>Silahkan upload file sesuai dengan format yang telah distandarisasi. Download format file <a href="public/files/data.csv"> disini</a></p>
			<p><strong> Upload Data: </strong></p>
			<input id='file' type="file" class="mb-5" />
			
			<p><strong> Data: </strong></p>
			<div id="data" class="mb-5"> A -> B </div>
			<div class="row col-md-12">
	        	<div id="graph"></div>
	    	</div>
        </section>

    </div>

<script type="text/javascript">


(function(){
    
    function onChange(event) {
        var reader = new FileReader();
        reader.onload = onReaderLoad;
        reader.readAsText(event.target.files[0]);
    }

    function onReaderLoad(event){
    	var node = [];
    	var dataset = [];
    	var dataset2 = [];
    	var obj = {};
    	var obj2 = {};
        var data = event.target.result;
        console.log(data);
        document.getElementById('data').innerHTML = data;
        var n = data.split("\n");
        for(var x in n){
        	var o = n[x].split("->");
        		var firstNode = o[0];
        		var secondNode = o[1] ? o[1] : '';
		    	var obj2 = {
		    		"from" 	: firstNode.replace(/[^a-zA-Z0-9]/g, ''),
		    		"to"	: secondNode.replace(/[^a-zA-Z0-9]/g, ''),
		    		"arrows": "to",
		    	}

		    	dataset2.push(obj2);

		    for(var p in o){
		    	var d = o[p].replace(/[^a-zA-Z0-9]/g, '');
		    	if($.inArray(d, node) === -1) {
		    		var obj = {
		    			"id" 	: d,
		    			"label" : d,
		    		}
		    		dataset.push(obj);
		    		node.push(d);
		    	}
		    }
		}

		drawGraph(dataset, dataset2);
    }
    

    function drawGraph(dataset, vector) {
    	console.log(dataset);
    	console.log(vector);

		var nodes = new vis.DataSet(dataset);
		var edges = new vis.DataSet(vector);

		var container = document.getElementById("graph");
		var data = {
		  nodes: nodes,
		  edges: edges,
		};
		var options = {};
		var network = new vis.Network(container, data, options);
		document.getElementById("file").value = "";
    }
 	
 	dataset = [ {id: "A", label: "A"},{id: "B", label: "B"}];
 	vector = [{from: "A", to: "B", arrows: "to"}];
 	drawGraph(dataset,vector);
    document.getElementById('file').addEventListener('change', onChange);

}());

</script>
<?php
include 'footer.php';