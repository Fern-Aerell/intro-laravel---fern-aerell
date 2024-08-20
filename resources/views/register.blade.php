<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GCI - Buat Akun</title>
  </head>
  <body>

    <header>
      <h1>Buat Account Baru!</h1>
      <h3>Sign Up Form</h3>
    </header>

    <form action="/welcome" method="GET">
      
      <div>
        <div>
          <label for="firstname">First name:</label>
        </div>
        <div>
          <input type="text" name="firstname">
        </div>
      </div>

      <br>

      <div>
        <div>
          <label for="lastname">Last name:</label>
        </div>
        <div>
          <input type="text" name="lastname">
        </div>
      </div>

      <div>
        <p>Gender:</p>
        <div>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label>
        </div>
        <div>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label>
        </div>
        <div>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label>
        </div>
      </div>

      <br>

      <div>
        <div>
          <label for="nationality">Nationality:</label>
        </div>
        <br>
        <div>
          <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapura">Singapura</option>
            <option value="jepang">Jepang</option>
            <option value="korea">Korea</option>
          </select>
        </div>
      </div>

      <br>

      <div>
        <div>
          <label for="language_spoken">Language Spoken:</label>
          <br>
          <br>
          <div>
            <input type="checkbox" id="indonesia" name="indonesia" value="indonesia">
            <label for="indonesia">Bahasa Indonesia</label>
          </div>
          <div>
            <input type="checkbox" id="english" name="english" value="english" value="english">
            <label for="english">English</label>
          </div>
          <div>
            <input type="checkbox" id="english" name="other" value="other">
            <label for="other">Other</label>
          </div>
        </div>
      </div>

      <br>

      <div>
        <label for="bio">Bio:</label>
        <br>
        <br>
        <textarea rows="5" cols="40"></textarea>
      </div>

      <button type="submit">Sign Up</button>

    </form>

  </body>
</html>
