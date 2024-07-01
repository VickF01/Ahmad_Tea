@extends('layouts.navbar')
@section('content')
<!--CONTENT START-->
<div class="container-lg" id="content">

    <div class="row">
        <div class="col-md-12 d-flex justify-content-center py-4">
            <h2 class="another" style="color: white; text-decoration: underline;">Contact Us</h2>
        </div>
    </div>

    <div class="container content">


        <div class="row">
            <div class="col-xl-12">
                <div class="background">
                    </td>
                    <center>
                        <fieldset>
                            <form name="Form" action="Contact Form.html" method="post" onsubmit="return validateForm()"
                                required>
                                <table>
                                    <br>
                                    <tr>
                                        <td>
                                            <label for="name">
                                                <font color="white">Nama
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </font>
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="name" id="name" size="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="email">
                                                <font color="white">Email
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</font>
                                            </label>
                                        </td>
                                        <td>
                                            <input type="email" name="email" id="email" size="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="telepon">
                                                <font color="white">Telephone &nbsp;: </font>
                                            </label>
                                        </td>
                                        <td>
                                            <input type="telepon" name="telepon" id="telpon" size="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="alamat">
                                                <font color="white">Address &nbsp;&nbsp;&nbsp;&nbsp;: </font>
                                            </label>
                                        </td>
                                        <td>
                                            <textarea id="text" name="alamat" rows="2" cols="50" required>

                                </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="negara">
                                                <font color="white">Country &nbsp;&nbsp;&nbsp;&nbsp;:</font>
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="negara" id="negara" size="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="kota">
                                                <font color="white">City
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                                </font>
                                            </label>
                                        </td>
                                        <td>
                                            <input type="text" name="kota" id="kota" size="50" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="pesan">
                                                <font color="white">Message &nbsp;&nbsp;&nbsp;&nbsp;:</font>
                                            </label>
                                        </td>
                                        <td>
                                            <textarea id="pesan" name="pesan" rows="4" cols="50" maxlength="500"
                                                required>

                                </textarea>
                                        </td>
                                    </tr>
                                    <td colspan="2">
                                        <br>
                                        <br>
                                        <input type="submit" class="btn btn-success">
                                        <button onclick="alert('Form Has Been Reset')" type="reset"
                                            class="btn btn-secondary" value="Reset">Reset</button>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                    </td>
                                    </tr>
                            </form>
                            </table>
                        </fieldset>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<!--BUTTON TO TOP-->
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>

</div>
<!--CONTENT END-->
@endsection
