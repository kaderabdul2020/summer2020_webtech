<!DOCTYPE html>
<html>
<head>
    <title>Personal Profile</title>
</head>
<body>
    <table width="50%" border="1">
      <tr>
          <td colspan="3" align="center">PERSONAL PROFILE</td>
      </tr>
      <tr>
          <td width="30%">Name</td>
          <td width="60%"><input type="text" name="name"></td>
          <td width="10%"></td>
      </tr>
      <tr>
          <td width="30%">Email</td>
          <td width="60%"><input type="text" name="email"></td>
          <td width="10%"></td>
      </tr>
      <tr>
        <td width="30%">Gender</td>
        <td width="60%"><input type="radio" value="male" name="male">Male
        <input type="radio" value="female" name="female">Female
        <input type="radio" value="others" name="others">Others</td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="30%">Date of Birth</td>
        <td width="60%"><input type="date">(dd/mm/yyyy)</td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="30%">Blood Group</td>
        <td width="60%"><select>
            <option>A+</option>
            <option>B</option>
            <option>O+</option>
        </select></td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="30%">Degree</td>
        <td width="60%">
          <input type="checkbox">SSS
          <input type="checkbox">HSC
          <input type="checkbox">BSc.
          <input type="checkbox">MSc.
        </td>
        <td width="10%"></td>
    </tr>
    <tr>
        <td width="30%">Photo</td>
        <td width="70%" colspan="2">
            <input type="file">
        </td>
    </tr>
    <tr>
        <td colspan="3" height="100%" width="100%">.</td>
    </tr>
    <tr>
        <td colspan="3" align="right">
            <input type="submit" value="submit">
            <input type="Reset">
        </td>
    </tr>


    </table>
</body>
</html>