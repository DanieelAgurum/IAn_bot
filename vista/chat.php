<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Chat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylesChat.css" />
</head>


<body>
    <header class="main-header">
        <div class="container">
            <?php include '../components/nav.php'; ?>
        </div>
    </header>
    <div id="contenedor-chat">
        <div class="chat-list" id="chat-list">
            <!-- Botón nuevo chat -->
            <div class="new-chat">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Nuevo chat</span>
            </div>

            <!-- Encabezado -->
            <div class="chat-header">
                <h3>Chats</h3>
            </div>

            <!-- Lista de chats -->
            <div class="info-chat">
                <div class="chat-text">
                    <strong>Título</strong>
                    <small>22/09/2025</small>
                </div>
                <div class="chat-options">⋮</div>
            </div>

            <div class="info-chat">
                <div class="chat-text">
                    <strong>Otro Chat</strong>
                    <small>21/09/2025</small>
                </div>
                <div class="chat-options">⋮</div>
            </div>

            <div class="info-chat">
                <div class="chat-text">
                    <strong>Amigos</strong>
                    <small>20/09/2025</small>
                </div>
                <div class="chat-options">⋮</div>
            </div>
        </div>

        <div id="chat-box" class="chat-box">
            <div class="chat-mensajes">
                <div class="mensaje mensaje-yo">
                    <p>Hola, ¿cómo estás?</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>Holaa, bien, ¿y tú?</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>Todo bien, gracias. ¿Qué has hecho hoy?</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>Estuve trabajando en la mañana y ahora estoy descansando un poco.</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>Qué bueno, yo también tuve un día pesado en el trabajo.</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>¿Sí? ¿Qué tal estuvo?</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>Bastante ocupado, pero ya terminé todo lo importante 😅</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>Eso está bien, así puedes relajarte ahora.</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>Sí, justo pensaba ver una serie más tarde. ¿Alguna recomendación?</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>Podrías ver *Dark*, es muy buena y atrapante.</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>¡He escuchado mucho de esa! La voy a buscar, gracias 😊</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>De nada, luego me cuentas qué te pareció.</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>Claro que sí. ¿Y tú qué planeas hacer?</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>Creo que voy a salir a caminar un rato, necesito despejarme.</p>
                </div>

                <div class="mensaje mensaje-yo">
                    <p>Genial, eso siempre ayuda. ¡Que disfrutes tu paseo!</p>
                </div>

                <div class="mensaje mensaje-otro">
                    <p>Gracias, igualmente disfruta tu serie 😄</p>
                </div>
            </div>
            <form id="formulario" enctype="multipart/form-data" autocomplete="off">
                <input type="hidden" id="id_usuaria" name="id_usuaria" value="<?= htmlspecialchars($_SESSION['id_usuaria'] ?? '') ?>" />
                <input type="hidden" id="id_receptor" name="id_receptor" value="" />
                <input type="text" id="mensaje" name="mensaje" placeholder="Escribe tu mensaje" />

                <label for="archivo" class="btn-subir-imagen">
                    <i class="fa-solid fa-microphone"></i>
                </label>

                <button type="submit" title="Enviar">
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</body>

</html>