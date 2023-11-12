<html>
  <head>
    <title>bank details</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bank Data View</title>

    
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<style>
          html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: black;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: black;
      z-index: 2;
      line-height: 83px;
      }
      .forminfo {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 50%;
      padding: 20px;
      border-radius: 6px;
      background: white;
      box-shadow: 0 0 8px  black; 
      margin-top: 30px;
      align-items: center;
      }
      .title {
      position: relative;
      height: 100px;
      background-size: cover;
      display: flex;
	  background-image: url("\application\views\banner.jpg");  
      background-size: cover;
	 
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .title::after {
	  content: "";
      background-color: white; 
      position: absolute;
      width: 100%;
      height: 100%;
	  
       
      
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid black;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }

      .item span {
      color: red;
      }

      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: grey;
      font-size: 16px;
      color: black;
      cursor: pointer;
      }
      button:hover {
      background: grey;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
		 
	</style>
  </head> 
  <body>
	<div class="forminfo">
  <form action="<?php echo base_url();?>index.php/bank_detail_control/savedata" method="POST"> 
	 <div class="title">
	<h1 >Bank Detaisl</h1>
    </div>
	<div class="item">
          <label for="name">Bank Name<span></span></label>
          <input id="bank_name" type="text" name="bname" pattern="[A-Za-z\s]+" title="Please enter English letters only."  required/>
        </div>
        <div class="item">
          <label for="branch">Branch<span></span></label>
          <input id="branch" type="text" name="branch" pattern="[A-Za-z\s]+" title="Please enter English letters only." required/>
        </div>
        <div class="item">
          <label for="ac_no">Account No.<span></span></label>
          <input id="ac_no" type="text" name="acnumber" pattern="[0-9]+" title="Please enter numbers only." required/>
        </div>
       
        <div class="btn-block">
          <button type="submit" >SUBMIT</button>
        </div>
		
</form>
</div>
<div class="btn-block">
    <a href="<?php echo base_url();?>index.php/bank_detail_control/index">  <button type="submit" >VIEW</button> </a>
</div>
</body>  
</html>


