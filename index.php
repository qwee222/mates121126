<?php include 'idioma.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['title']; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #000000;
            color: #ffffff;
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        /* Video de fondo adaptativo */
        .video-background {
            position: fixed;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
            opacity: 0.35;
            z-index: 1;
            filter: brightness(0.7);
        }

        .vignette {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(0,0,0,0.3) 20%, rgba(0,0,0,0.95) 85%);
            z-index: 2;
            pointer-events: none;
        }

        /* Tarjetas flotantes */
        .modal-card {
            position: relative;
            z-index: 10;
            background: rgba(18, 18, 18, 0.85);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            padding: 35px 25px;
            width: 90%;
            max-width: 420px;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.8);
            margin: auto;
        }

        .icon-container {
            width: 58px;
            height: 58px;
            background: rgba(24, 119, 242, 0.15);
            border: 1px solid rgba(24, 119, 242, 0.3);
            border-radius: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 20px auto;
        }

        .icon-container svg {
            width: 28px;
            height: 28px;
            fill: #1877F2;
        }

        h1 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 10px;
            color: #ffffff;
            letter-spacing: -0.5px;
        }

        p {
            font-size: 13.5px;
            color: #b0b3b8;
            line-height: 1.45;
            margin-bottom: 25px;
        }

        .btn {
            width: 100%;
            padding: 13px;
            border-radius: 10px;
            font-size: 14.5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            border: none;
            margin-bottom: 12px;
        }

        .btn-primary {
            background-color: #1877F2;
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(24, 119, 242, 0.4);
        }

        .btn-primary:hover {
            background-color: #166fe5;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.6), 0 4px 20px rgba(24, 119, 242, 0.6);
            transform: translateY(-1px);
        }

        .btn-secondary {
            background-color: rgba(255, 255, 255, 0.05);
            color: #e4e6eb;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-secondary:hover {
            background-color: rgba(24, 119, 242, 0.1);
            color: #1877F2;
            border-color: #1877F2;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5), 0 0 20px rgba(24, 119, 242, 0.4);
            transform: translateY(-1px);
        }

        .footer-sec {
            margin-top: 20px;
            font-size: 11.5px;
            color: #8a8d91;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            padding-top: 16px;
        }

        /* Secciones ocultas inicialmente */
        .step-hidden {
            display: none;
        }

        /* Barra de carga */
        .progress-bar-bg {
            width: 100%;
            height: 9px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            overflow: hidden;
            margin: 20px 0;
            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .progress-bar-fill {
            height: 100%;
            width: 0%;
            background: #1877F2;
            box-shadow: 0 0 10px #1877F2;
            border-radius: 5px;
            transition: width 0.015s linear;
        }

        .percentage-text {
            font-size: 26px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 6px;
        }
    </style>
</head>
<body>

    <!-- Video de fondo -->
    <video class="video-background" autoplay muted loop playsinline>
        <source src="https://directo.discrettasliveftosgroup.com/video.mp4" type="video/mp4">
    </video>
    <div class="vignette"></div>

    <!-- PASO 1: Verificación de Edad -->
    <div class="modal-card" id="step1">
        <div class="icon-container">
            <svg viewBox="0 0 24 24"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M17.13,17C15.92,18.85 14.11,20 12,20C9.89,20 8.08,18.85 6.87,17C6.53,16.5 6.87,15.82 7.47,15.75C9.3,15.5 10.6,15 12,15C13.4,15 14.7,15.5 16.53,15.75C17.13,15.82 17.47,16.5 17.13,17Z" /></svg>
        </div>
        <h1><?php echo $t['title']; ?></h1>
        <p><?php echo $t['desc']; ?></p>
        <button class="btn btn-primary" onclick="startLoading()"><?php echo $t['yes']; ?></button>
        <button class="btn btn-secondary" onclick="alert('<?php echo $t['no_access']; ?>')"><?php echo $t['no']; ?></button>
        <div class="footer-sec">🔒 <?php echo $t['security']; ?></div>
    </div>

    <!-- PASO 2: Pantalla de Loading (1.5 segundos) -->
    <div class="modal-card step-hidden" id="stepLoading">
        <div class="icon-container">
            <svg viewBox="0 0 24 24"><path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M17.13,17C15.92,18.85 14.11,20 12,20C9.89,20 8.08,18.85 6.87,17C6.53,16.5 6.87,15.82 7.47,15.75C9.3,15.5 10.6,15 12,15C13.4,15 14.7,15.5 16.53,15.75C17.13,15.82 17.47,16.5 17.13,17Z" /></svg>
        </div>
        <div class="percentage-text" id="counter">1%</div>
        <h1 style="font-size: 19px; margin-bottom: 6px;"><?php echo $t['loading_text']; ?></h1>
        <p style="margin-bottom: 15px;"><?php echo $t['security']; ?></p>
        <div class="progress-bar-bg">
            <div class="progress-bar-fill" id="progressBar"></div>
        </div>
    </div>

    <!-- PASO 3: Siguiente paso dentro de la misma Landing -->
    <div class="modal-card step-hidden" id="stepFinal">
        <div class="icon-container" style="background: rgba(46, 204, 113, 0.15); border-color: rgba(46, 204, 113, 0.3);">
            <svg viewBox="0 0 24 24" style="fill: #2ecc71;"><path d="M12 2C6.5 2 2 6.5 2 12S6.5 22 12 22 22 17.5 22 12 17.5 2 12 2M10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z"/></svg>
        </div>
        <h1><?php echo $t['step2_title']; ?></h1>
        <p><?php echo $t['step2_desc']; ?></p>
        <button class="btn btn-primary" onclick="alert('Acción del siguiente paso completada')"><?php echo $t['step2_btn']; ?></button>
        <div class="footer-sec">🔒 <?php echo $t['security']; ?></div>
    </div>

    <script>
        function startLoading() {
            // Ocultar paso 1 y mostrar barra de carga
            document.getElementById('step1').style.display = 'none';
            document.getElementById('stepLoading').style.display = 'block';

            let currentProgress = 1;
            const totalDuration = 1500; // 1.5 segundos exactos
            const intervalTime = totalDuration / 100;

            const bar = document.getElementById('progressBar');
            const counter = document.getElementById('counter');

            const loadingInterval = setInterval(() => {
                currentProgress++;
                bar.style.width = currentProgress + '%';
                counter.innerText = currentProgress + '%';

                if (currentProgress >= 100) {
                    clearInterval(loadingInterval);
                    // Ocultar carga y mostrar el siguiente paso interno en la misma landing
                    setTimeout(() => {
                        document.getElementById('stepLoading').style.display = 'none';
                        document.getElementById('stepFinal').style.display = 'block';
                    }, 200);
                }
            }, intervalTime);
        }
    </script>

</body>
</html>
