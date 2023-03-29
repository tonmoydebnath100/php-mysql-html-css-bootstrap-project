<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <link rel="stylesheet" href="signup.css">
         
</head>
<body>
    
    <div class="container">
        <div class="forms">
            

            <div class="form signup">
                <span class="title">Registration</span>

               
                    <div class="input-field">
                        <input type="text" name="email" id="email" placeholder="Enter your email" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" name="pass" id="pass" class="password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name="contact" placeholder="Contact number" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    

                    

                    <div class="input-field button">
                        <input type="submit" id="register" value="Register Now">
                    </div>

                
                

                <div class="login-signup">
                    <span class="text">
                        <a href="Login.php" class="text login-link">Already have an account</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    

    <script src="login.js"></script>
    <script type="module">
      // Import the functions you need from the SDKs you need
      import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
      import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
      import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword, signOut } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js";
      // TODO: Add SDKs for Firebase products that you want to use
      // https://firebase.google.com/docs/web/setup#available-libraries

      // Your web app's Firebase configuration
      // For Firebase JS SDK v7.20.0 and later, measurementId is optional
      const firebaseConfig = {
        apiKey: "AIzaSyD_vRCp6K7f1o8lOLNIyzWG-LBTNlCJgAU",
        authDomain: "fifa-world-cup-qatar-202-63b5a.firebaseapp.com",
        projectId: "fifa-world-cup-qatar-202-63b5a",
        storageBucket: "fifa-world-cup-qatar-202-63b5a.appspot.com",
        messagingSenderId: "499198535674",
        appId: "1:499198535674:web:5f4eb1fe8b38aaa6f2a643",
        measurementId: "G-SBXQQ4Y1PS"
      };

      // Initialize Firebase
      const app = initializeApp(firebaseConfig);
      const analytics = getAnalytics(app);
      const auth = getAuth();

       //----- New Registration code start	  
	  document.getElementById("register").addEventListener("click", function() {
		  var email =  document.getElementById("email").value;
		  var password = document.getElementById("pass").value;
		  //For new registration
		  createUserWithEmailAndPassword(auth, email, password)
		  .then((userCredential) => {
		    // Signed in 
		    const user = userCredential.user;
		    console.log(user);
		    alert("Registration successfully!!");
        window.location="login.php";
		    // ...
		  })
		  .catch((error) => {
		    const errorCode = error.code;
		    const errorMessage = error.message;
		    // ..
		    console.log(errorMessage);
		    alert(error);
		  });		  		  
	  });
   

    </script>

</body>
</html>