<?php
// Detección automática del idioma del navegador
$browser_lang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'es';

$translations = [
    'es' => [
        'title' => '¿Tienes 18 años o más?',
        'desc' => 'Este sitio contiene material exclusivo y restringido para adultos. Por favor, confirma tu edad para continuar.',
        'yes' => 'Sí, tengo 18 años o más',
        'no' => 'No, soy menor de edad',
        'security' => 'Verificación segura y confidencial',
        'loading_text' => 'Verificando edad...',
        'no_access' => 'Acceso restringido para menores de edad.',
        'step2_title' => 'Verificación Completada',
        'step2_desc' => 'Tu identidad y edad han sido confirmadas exitosamente en el sistema.',
        'step2_btn' => 'Continuar al siguiente paso'
    ],
    'en' => [
        'title' => 'Are you 18 or older?',
        'desc' => 'This site contains exclusive and restricted content for adults. Please confirm your age to continue.',
        'yes' => 'Yes, I am 18 or older',
        'no' => 'No, I am under 18',
        'security' => 'Secure and confidential verification',
        'loading_text' => 'Verifying age...',
        'no_access' => 'Restricted access for minors.',
        'step2_title' => 'Verification Completed',
        'step2_desc' => 'Your identity and age have been successfully confirmed in the system.',
        'step2_btn' => 'Continue to next step'
    ],
    'pt' => [
        'title' => 'Você tem 18 anos ou mais?',
        'desc' => 'Este site contém material exclusivo e restrito para adultos. Por favor, confirme sua idade para continuar.',
        'yes' => 'Sim, tenho 18 anos ou mais',
        'no' => 'Não, sou menor de idade',
        'security' => 'Verificação segura e confidencial',
        'loading_text' => 'Verificando idade...',
        'no_access' => 'Acesso restrito para menores de idade.',
        'step2_title' => 'Verificação Concluída',
        'step2_desc' => 'Sua identidade e idade foram confirmadas com sucesso no sistema.',
        'step2_btn' => 'Continuar para o próximo passo'
    ],
    'fr' => [
        'title' => 'Avez-vous 18 ans ou plus ?',
        'desc' => 'Ce site contient du contenu exclusif réservé aux adultes. Veuillez confirmer votre âge pour continuer.',
        'yes' => 'Oui, j\'ai 18 ans ou plus',
        'no' => 'Non, je suis mineur',
        'security' => 'Vérification sécurisée et confidentielle',
        'loading_text' => 'Vérification de l\'âge...',
        'no_access' => 'Accès restreint aux mineurs.',
        'step2_title' => 'Vérification Terminée',
        'step2_desc' => 'Votre identité et votre âge ont été confirmés avec succès.',
        'step2_btn' => 'Continuer vers l\'étape suivante'
    ],
    'de' => [
        'title' => 'Sind Sie 18 Jahre oder älter?',
        'desc' => 'Diese Website enthält exklusive Inhalte für Erwachsene. Bitte bestätigen Sie Ihr Alter, um fortzufahren.',
        'yes' => 'Ja, ich bin 18 oder älter',
        'no' => 'Nein, ich bin minderjährig',
        'security' => 'Sichere und vertrauliche Überprüfung',
        'loading_text' => 'Altersüberprüfung...',
        'no_access' => 'Zugriff für Minderjährige nicht gestattet.',
        'step2_title' => 'Überprüfung Abgeschlossen',
        'step2_desc' => 'Ihre Identität und Ihr Alter wurden erfolgreich bestätigt.',
        'step2_btn' => 'Weiter zum nächsten Schritt'
    ],
    'it' => [
        'title' => 'Hai 18 anni o più?',
        'desc' => 'Questo sito contiene materiale esclusivo e riservato ad un pubblico adulto. Conferma la tua età per continuare.',
        'yes' => 'Sì, ho 18 anni o più',
        'no' => 'No, sono minorenne',
        'security' => 'Verifica sicura e confidenziale',
        'loading_text' => 'Verifica dell\'età...',
        'no_access' => 'Accesso vietato ai minori.',
        'step2_title' => 'Verifica Completata',
        'step2_desc' => 'La tua identità e la tua età sono state confermate con successo.',
        'step2_btn' => 'Continua al passaggio successivo'
    ]
];

$lang = array_key_exists($browser_lang, $translations) ? $browser_lang : 'es';
$t = $translations[$lang];
?>
