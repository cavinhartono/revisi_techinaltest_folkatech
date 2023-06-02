### Technical Test

## Laravel

---

<p>Rest API</p>

-   Register

<p>http://localhost:8000/api/register</p>

<table style="width: 100%">
  <thead>
    <tr>
      <th>Key</th>
      <th>Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>email</td>
      <td>johndoe@example.com</td>
    </tr>
    <tr>
      <td>name</td>
      <td>John Doe</td>
    </tr>
    <tr>
      <td>password</td>
      <td>Minimal 8 karakter</td>
    </tr>
    <tr>
      <td>password_confirmation</td>
      <td>sesuai dari password</td>
    </tr>
  </tbody>
</table>

<table style="width: 100%">
  <thead>
    <tr>
      <th>True</th>
      <th>False</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="" /></td>
      <td><img src="" /></td>
    </tr>
  </tbody>
</table>

-   Login

<p>http://localhost:8000/api/login</p>

<table style="width: 100%">
  <thead>
    <tr>
      <th>Key</th>
      <th>Value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Email</td>
      <td>-</td>
    </tr>
    <tr>
      <td>Password</td>
      <td>-</td>
    </tr>
  </tbody>
</table>

<table style="width: 100%">
  <thead>
    <tr>
      <th>True</th>
      <th>False</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="" /></td>
      <td><img src="" /></td>
    </tr>
  </tbody>
</table>

-   Products

<p>http://localhost:8000/api/list-product</p>

<table style="width: 100%">
  <thead>
    <tr>
      <th>Kurang dari Satu</th>
      <th>Lebih dari Satu</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="" /></td>
      <td><img src="" /></td>
    </tr>
  </tbody>
</table>

-   Detail Product

<p>http://localhost:8000/api/product/{id}</p>

<table style="width: 100%">
  <thead>
    <tr>
      <th>True</th>
      <th>False</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="" /></td>
      <td><img src="" /></td>
    </tr>
  </tbody>
</table>
