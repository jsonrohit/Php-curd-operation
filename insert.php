<?php
include "binsert.php";
?>

<html>
<head>
</head>
<body>
<form action="" method="post">

<table cellpadding="2" width="25%" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><h2>Registration Form</h2></font></center>
</td>
</tr>

<tr>
<td>Frist Name</td>
<td><input type="text" name="fname" required></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" name="lname" required></td>
</tr>

<tr>
<td>Father Name</td>
<td><input type="text" name="father" required></td>
</tr>


<tr>
<td>Address</td>
<td><input type="text" name="address" required></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male" required>Male
<input type="radio" name="gender" value="Female">Female</td>
</tr>

<tr>
<td>PinCode</td>
<td><input type="text" name="pincode" required></td>

</tr>
<tr>
<td>EmailId</td>
<td><input type="email" name="email" required></td>
</tr>

<tr>
<td>DOB</td>
<td>
 <select size="1" name="year" value="Year" required>
   <option value="">Year</option>
   <option>1980</option>
   <option>1981</option>
   <option>1982</option>
   <option>1982</option>
   <option>1983</option>
   <option>1984</option>
   <option>1985</option>
   <option>1986</option>
   <option>1987</option>
   <option>1988</option>
   <option>1989</option>
   <option>1990</option>
   <option>1991</option>
   <option>1992</option>
   <option>1993</option>
   <option>1994</option>
   <option>1995</option>
   <option>1996</option>
   <option>1997</option>
   <option>1998</option>
   <option>1999</option>
   <option>2000</option>
   <option>2001</option>
   <option>2002</option>
   <option>2003</option>
   <option>2004</option>
   <option>2005</option>
   <option>2006</option>
   <option>2007</option>
   <option>2008</option>
   <option>2009</option>
   <option>2010</option>
</select>
  <select size="1" name="mo" value="month" required>  </th>
  <option value="">month</option>
   <option>jan</option>
   <option>feb</option>
   <option>mar</option>
   <option>apr</option>
   <option>may</option>
   <option>june</option>
   <option>july</option>
   <option>Aug</option>
   <option>Sep</option>
   <option>Oct</option>
   <option>Nov</option>
   <option>Dec</option>
</select>
<select size="1" name="date" value="date" required>
   <option value="">date</option>
   <option>1</option>
   <option>2</option>
   <option>3</option>
   <option>4</option>
   <option>5</option>
   <option>6</option>
   <option>7</option>
   <option>8</option>
   <option>9</option>
   <option>10</option>
   <option>11</option>
   <option>12</option>
   <option>13</option>
   <option>14</option>
   <option>15</option>
   <option>16</option>
   <option>17</option>
   <option>18</option>
   <option>19</option>
   <option>20</option>
   <option>21</option>
   <option>22</option>
   <option>23</option>
   <option>24</option>
   <option>25</option>
   <option>26</option>
   <option>27</option>
   <option>28</option>
   <option>29</option>
   <option>30</option>
   <option>31</option>
</select> </td>
</tr>

<tr>
<td>MobileNo</td>
<td><input type="text" name="mobile" required="m"></td>
</tr><tr>
<td>Password</td>
<td><input type="password" name="password" required></td>
</tr><tr>
<td>Confirm Password</td>
<td><input type="password" name="cpassword" required></td>
</tr>
<tr>
<td></td>
<td colspan="2"><input type="submit" value="Submit" name="submit" /></td>
</tr>
</table>
</form>
</body>
</html>