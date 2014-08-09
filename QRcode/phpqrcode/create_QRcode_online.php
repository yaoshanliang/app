<h3>QRcode based on Google Chart API</h3></br>
<form  target = "create_QRcode"  id = "create_QRcode_website" method = "post" action = "./QRcode/create_QRcode_website.php" >
    
    <h4>website:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name = "website" value = "http://" />&nbsp&nbsp
    <input type = "submit" value = "  <==create==>  "></br></h4>

</form>

<form  target = "create_QRcode"  id = "create_QRcode_telephone" method = "post" action = "./QRcode/create_QRcode_telephone.php" >

    <h4>telephone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name = "telephone"/>&nbsp&nbsp
    <input type = "submit" value = "  <==create==>  "></br></br></h4>
</form>

<form  target = "create_QRcode"  id = "create_QRcode_card" method = "post" action = "./QRcode/create_QRcode_card.php" >

    <h4>Business card:</h4>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" name = "name_card"  /></br>

     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    telephone:&nbsp
    <input type="text" name = "telephone_card"  /></br>

     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    email:&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp
    <input type="text" name = "email_card" /></br>

     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    address:&nbsp&nbsp&nbsp&nbsp
    <textarea name = "address_card" rows="2" cols="25"></textarea> 
    <input type = "submit" value = "  <==create==>  ">

    
</form>
<iframe name = "create_QRcode" frameborder="0"  scrolling="no" width="500px" height="500px">
</iframe><!--让表单提交，目标刷新页是iframe-->
