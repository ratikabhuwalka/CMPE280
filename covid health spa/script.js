var db = null;

// conn = function() {
//    db = window.openDatabase('Health_Camp_SPA', '1.0', 'Patient Details', 1024*1024*3);
// };

createTable = function() {
  db.transaction(function(tr){
    tr.executeSql(
      "CREATE TABLE IF NOT EXISTS patient_details (name TEXT, age INTEGER, gender TEXT, photo BLOB, medications TEXT, notes TEXT)", [],
      function(){ },
      function(tx, error){ alert(error.message); } );
  });
};

insertDemo = function(name, age, gender, img) {
  localStorage.setItem('name', name);
  localStorage.setItem('age', age);
  localStorage.setItem('gender', gender);
  localStorage.setItem('image', img);
};

insertVitals = function(medics, notes) {
  var name = localStorage.getItem('name');
  var age = localStorage.getItem('age');
  var gender = localStorage.getItem('gender');
  var img = localStorage.getItem('image');
  db.transaction(function(tr, err) {
    tr.executeSql("INSERT INTO patient_details(name,age,gender,photo,medications,notes) VALUES(?,?,?,?,?,?)",[name,age,gender,img,medics,notes]);
  }, function (err) {
      console.log(err);
  });
};




saveData = function(medics, notes) {
  
  console.log("in save data")
  var name = localStorage.getItem('name');
  var age = localStorage.getItem('age');
  var gender = localStorage.getItem('gender');
  var img = localStorage.getItem('image');
  if(name!="" && gender!="" && age!=""){
  const d = {
    'name': name,
    'age': age,
    'gender':gender,
    'img': img,
    'medics': medics,
    'notes': notes
  }

  let data = localStorage.getItem('data')
  if(data){
    data = JSON.parse(data)
  }

  else{
    data = []
  }
    data.push(d)
    localStorage.setItem('data', JSON.stringify(data))
  }
else  {
   alert('Please fill all the field !');
}


  // if(name!="" && gender!="" && age!=""){
  //   console.log("about to call ajax")
  //   $.ajax({
  //     url: "http://localhost:8080/postDetails.php",
  //     type: "POST",
  //     data: {
  //       name: name,
  //       age: age,
  //       gender: gender,
  //       img: img,
  //       medics: medics,
  //       notes: notes
  //     },
  //     cache: false,
  //     headers: {
  //       "accept": "application/json",
  //       "Access-Control-Allow-Origin":"*"
  //   },
  //     success: function(dataResult){
  //      console.log(dataResult);
  //       var dataResult = JSON.parse(dataResult);
  //       if(dataResult.statusCode==200){
  //         alert('Data added successfully !');
  //         location.reload();
  //       }
  //       else if(dataResult.statusCode==201){
  //         alert("Error occured !");
  //       }
        
  //     }
  //   });
  //   }
  //   else{
  //     alert('Please fill all the field !');
  //   }


}

fetchData = function() {
  db.transaction(function(tr) {
    tr.executeSql("SELECT name,age,gender,photo,medications,notes FROM patient_details",[],
      function(trans, data) {
        for (var i = 0; i < data.rows.length; i++) {
          var row = data.rows.item(i);
          var name=row['name'];
          var age=row['age'];
          var gender=row['gender'];
          var img=row['photo'];
          var medics=row['medications'];
          var notes=row['notes'];

          addToList(name,age,gender,img,medics,notes);
        }
      });
  });
};

getData = function() {
  let data = localStorage.getItem('data')
  if(data && data!='[]'){
    data = JSON.parse(localStorage.getItem('data'))

    for (var i = 0; i < data.length; i++) {
      var row = data[i];
      var name=row['name'];
      var age=row['age'];
      var gender=row['gender'];
      var img=row['photo'];
      var medics=row['medications'];
      var notes=row['notes'];

      addToList(name,age,gender,img,medics,notes);
    }
  }

}


addToList = function(name, age, gender, img, medics, notes) {
  $('#details-table').append(`<tr><td>${name}</td>
                              <td>${age}</td>
                              <td>${gender}</td>
                              <td class="img-cell"><img src=${img} class="img-table"></td>
                              <td>${medics}</td>
                              <td>${notes}</td>`);
};

$(function() {
  // conn();
  // createTable();
  // fetchData();
  getData();

  $("#demo-save").click(function() {
    var fname = $('#fname').val();
    var name = fname+ " "+$('#lname').val();
    var age = $('#age').val();
    var gender = $('#gender-select').find(':selected').val();
    var img = $('#photo').attr('src');
    insertDemo(name, age, gender, img);
  });

  $("#vitals-save").click(function() {
    var medics = $('#medics').val();
    var notes = $('#notes').val();
    //insertVitals(medics,notes);
    saveData(medics,notes);
  });

  $("#demo-delete").click(function() {
    var name = $('#lname').val();
    deleteData(name);
  });
});

$("#scroll").click(function() {
    $('html,body').animate({
        scrollTop: $("#demo-header").offset().top},
        1000);
});

$("#logo-name").click(function () {
  $('html,body').animate({
    scrollTop: $("#home").offset().top
  }, 1000);
});

$("#home-link").click(function() {
    $('html,body').animate({
        scrollTop: $("#home").offset().top},
        1000);
});

$("#demo-link").click(function() {
    $('html,body').animate({
        scrollTop: $("#demo-header").offset().top},
        1000);
});

$("#vitals-link").click(function() {
    $('html,body').animate({
        scrollTop: $("#vitals-header").offset().top},
        1000);
});

$("#reports-link").click(function() {
    $('html,body').animate({
        scrollTop: $("#reports-header").offset().top},
        1000);
});

$("#to-top").click(function () {
  $('html,body').animate({
    scrollTop: $("#home").offset().top
  }, 1000);
});

$(window).scroll(function(){
    $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
    $("#scroll").css("opacity", 1 - $(window).scrollTop() / 250);
    $("#home").css("opacity", 1 - $(window).scrollTop() / 3000);
});