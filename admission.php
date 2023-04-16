

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="./admission.css">
</head>
<body>
    <h1>Admission Form</h1>
    <form   method="POST"  action="database.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"   >

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"   >

        <label for="gender">Gender:</label>
        <select id="gender" name="gender"   >
            <option value="">--Please select--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="course">Course:</label>
        <select id="course" name="course"   >
            <option value="">--Please select--</option>
            <option value="computer_science">Computer Science</option>
            <option value="business">Business</option>
            <option value="engineering">Engineering</option>
        </select>
        
        <!-- <div>
            <label for="photo">Passport size photo:</label>
            <input type="file" id="photo" name="photo" onclick="passId(imageInput,imageOutput)"  accept="image/*"   >
            <img src="" alt="" id="img" width="20%">

        </div>
        
        <div>
            <label for="signature">Signature:</label>
            <input type="file" id="signature" name="signature" onclick="passId(signatureinput , sigOutput)" accept="image/*"   >
            <img src="" alt="" id="Signature-Img" width="20%">
        </div>-->
        <label for="message">Message:</label>
        <textarea id="message" name="message"   ></textarea> 
        
        <input type="submit" value="submit" name="submit">
    </form>

    <!-- <input type="file" id="fileInput" onclick=""> -->



    <!-- <img src="" alt=""> -->
    <script src="./admission.js" defer></script>
</body>
</html>

