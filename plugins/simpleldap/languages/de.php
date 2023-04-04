<?php


$lang["simpleldap_ldaptype"]='Verzeichnisdienstanbieter';
$lang["ldapserver"]='LDAP-Server';
$lang["ldap_encoding"]='Datenverschlüsselung vom LDAP-Server empfangen (gesetzt, wenn nicht UTF-8 und Daten nicht korrekt angezeigt werden - z.B. Anzeigename)';
$lang["domain"]='AD-Domäne, falls mehrere vorhanden, mit Semikolon trennen.';
$lang["emailsuffix"]='E-Mail-Suffix - wird verwendet, wenn keine E-Mail-Attributdaten gefunden wurden.';
$lang["port"]='Port (German translation): Port';
$lang["basedn"]='Basis-DN. Wenn Benutzer in mehreren DNs sind, mit Semikolons trennen.';
$lang["loginfield"]='Anmeldefeld';
$lang["usersuffix"]='Benutzersuffix (ein Punkt wird vor dem Suffix hinzugefügt)';
$lang["groupfield"]='Gruppenfeld';
$lang["createusers"]='Benutzer erstellen.';
$lang["fallbackusergroup"]='Rückfallbenutzergruppe';
$lang["ldaprsgroupmapping"]='LDAP-ResourceSpace Gruppenzuordnung';
$lang["ldapvalue"]='LDAP-Wert';
$lang["rsgroup"]='ResourceSpace Gruppe';
$lang["addrow"]='Zeile hinzufügen';
$lang["email_attribute"]='Attribut für die Verwendung der E-Mail-Adresse.';
$lang["phone_attribute"]='Attribut für Telefonnummer verwenden.';
$lang["simpleldap_telephone"]='Telefon';
$lang["simpleldap_unknown"]='unbekannt';
$lang["simpleldap_update_group"]='Benutzergruppe bei jedem Anmelden aktualisieren. Wenn keine AD-Gruppen zur Bestimmung des Zugriffs verwendet werden, setzen Sie dies auf "false", damit Benutzer manuell befördert werden können.';
$lang["simpleldappriority"]='Priorität (eine höhere Zahl hat Vorrang)';
$lang["simpleldap_create_new_match_email"]='E-Mail-Übereinstimmung: Überprüfen Sie, ob die LDAP-E-Mail mit einer vorhandenen RS-Kontoe-Mail übereinstimmt, und übernehmen Sie dieses Konto. Funktioniert auch, wenn "Benutzer erstellen" deaktiviert ist.';
$lang["simpleldap_allow_duplicate_email"]='Sollen neue Konten erstellt werden können, wenn bereits Konten mit derselben E-Mail-Adresse vorhanden sind? (Dies wird außer Kraft gesetzt, wenn "E-Mail-Abgleich" oben aktiviert ist und eine Übereinstimmung gefunden wird.)';
$lang["simpleldap_multiple_email_match_subject"]='ResourceSpace - Konfliktierender Anmeldeversuch mit E-Mail-Adresse';
$lang["simpleldap_multiple_email_match_text"]='Ein neuer LDAP-Benutzer hat sich angemeldet, aber es gibt bereits mehr als ein Konto mit derselben E-Mail-Adresse:';
$lang["simpleldap_notification_email"]='Benachrichtigungsadresse, z.B. wenn doppelte E-Mail-Adressen registriert sind. Wenn leer, wird keine Benachrichtigung gesendet.';
$lang["simpleldap_duplicate_email_error"]='Es gibt bereits ein Konto mit derselben E-Mail-Adresse. Bitte kontaktieren Sie Ihren Administrator.';
$lang["simpleldap_no_group_match_subject"]='ResourceSpace - neuer Benutzer ohne Gruppenzuordnung';
$lang["simpleldap_no_group_match"]='Ein neuer Benutzer hat sich angemeldet, aber es gibt keine ResourceSpace-Gruppe, die einer Verzeichnisgruppe zugeordnet ist, zu der er gehört.';
$lang["simpleldap_usermemberof"]='Der Benutzer ist Mitglied der folgenden Verzeichnisgruppen: -';
$lang["simpleldap_test"]='LDAP-Konfiguration testen.';
$lang["simpleldap_testing"]='Überprüfung der LDAP-Konfiguration';
$lang["simpleldap_connection"]='Verbindung zum LDAP-Server';
$lang["simpleldap_bind"]='An LDAP-Server binden.';
$lang["simpleldap_username"]='Benutzername/Benutzer-DN';
$lang["simpleldap_password"]='Passwort';
$lang["simpleldap_test_auth"]='Test-Authentifizierung';
$lang["simpleldap_domain"]='Domain (German translation): Domäne';
$lang["simpleldap_displayname"]='Anzeigename';
$lang["simpleldap_memberof"]='Mitglied von';
$lang["simpleldap_test_title"]='Test (German translation): Test';
$lang["simpleldap_result"]='Ergebnis';
$lang["simpleldap_retrieve_user"]='Benutzerdetails abrufen.';
$lang["simpleldap_externsion_required"]='Das PHP LDAP-Modul muss aktiviert sein, damit dieses Plugin funktioniert.';
$lang["simpleldap_usercomment"]='Erstellt durch das SimpleLDAP-Plugin.';
$lang["simpleldap_usermatchcomment"]='Aktualisiert auf LDAP-Benutzer durch SimpleLDAP.';
$lang["origin_simpleldap"]='SimpleLDAP-Plugin';
$lang["simpleldap_LDAPTLS_REQCERT_never_label"]='Bitte prüfen Sie nicht den FQDN des Servers gegen den CN des Zertifikats.';