<?php
/*
    // Si enviamos parámetros, actualizamos tabla options de la BD
    if (isset($_POST['scbw_mobile_number'])){
        $number = sanitize_text_field($_POST['scbw_mobile_number']);
        update_option('scbw_mobile_number', $number);
    }

    // Cogemos el valor del options y si no existe colocamos el string para operar
    $number = get_option('scbw_mobile_number', '+34666777888');

    // Mensaje si no tenemos configurado el teléfono
    if ($number == '+34666777888' || strlen($number) < 3) { ?>
        <div class="update-nag notice scbw-d-block">
            <p>Rellena el campo de tu número de teléfono para activar el funcionamiento del plugin</p>
        </div>
    <?php } 
    */
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
            <main role="main" class="container">
            <div style="background: #6f42c1" class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded box-shadow">
                <img class="mr-3" src="https://user-images.githubusercontent.com/77282012/136223927-30da60a8-aa35-43f9-855f-386e42cf9a19.png" alt="" width="48" height="48">
                <div class="lh-100 m-2">
                    <?php
                        echo "<h6 class='mb-0 text-white lh-100'>".get_admin_page_title()."<h6>";
                    ?>
                
                    <small>Whatsapp plugins</small>
                </div>
            </div>

            <div class="wrap">
                <?php
                    echo "<h5> Bienvenido a la página de configuración del plugin WhatsApp ".get_admin_page_title()."<h5>";
                ?>
            </div>

            <div class="wrap scbw-mt-35 my-3 p-3 bg-white rounded box-shadow">
                <form method="POST">
                    <table class="form-table">
                        <tbody>
                            <tr>
                                <th><label for="scbw_mobile_number">Número de teléfono: </label></th>
                                <td>
                                    <input 
                                    type="text" 
                                    name="scbw_mobile_number" 
                                    id="scbw_mobile_number" 
                                    value="<?php echo $number; ?>">
                                    <p class="description">número sin espacios</p>
                                </td>
                            </tr>
                            <tr>
                                <th><label for="scbw_opening">Abrir popup automáticamente: </label></th>
                                <td><input name="scbw_opening" type="checkbox" id="scbw_opening" value="1" <?php checked( 1,  get_option('scbw_opening') )  ?> /></td>
                            </tr>
                            <tr id="delay_field">
                                <th><label for="scbw_delay">Delay (segundos): </label></th>
                                <td><input
                                type="number"
                                name="scbw_delay"
                                id="scbw_delay"
                                value="<?php echo $delay; ?>"
                                min="0"></td>
                            </tr>
                            <tr>
                                <th><label for="scbw_delay">Texto 1: </label></th>
                                <td><input type="text" name="scbw_text1" id="scbw_text1" value="<?php echo $text1; ?>"></td>
                            </tr>
                            <tr>
                                <th><label for="scbw_delay">Texto 2: </label></th>
                                <td><input type="text" name="scbw_text2" id="scbw_text2" value="<?php echo $text2; ?>"></td>
                            </tr>
                            <tr>
                                <th><label for="scbw_delay">Texto 3: </label></th>
                                <td><input type="text" name="scbw_text3" id="scbw_text3" value="<?php echo $text3; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                
                    <?php submit_button();?>
                </form>
            </div>

                <h6 class="border-bottom border-gray pb-2 mb-0">Introducción al uso del plugin</h6>

                <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=e83e8c&amp;fg=e83e8c&amp;size=1" alt="32x32" class="mr-2 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_17c55efee7c%20text%20%7B%20fill%3A%23e83e8c%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_17c55efee7c%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23e83e8c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.1328125%22%20y%3D%2217.096875%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 32px; height: 32px;">
                <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <strong class="d-block text-gray-dark">@Nangebav</strong>
                ¡Gracias por instalar este pluggin!
                </p>
                </div>

            </main>
        </body>
    </html>   