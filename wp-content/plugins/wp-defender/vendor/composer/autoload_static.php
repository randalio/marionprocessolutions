<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7b7d9424ae2fa4d12e80e89a942b1653
{
    public static $files = array (
        'bbf73f3db644d3dced353b837903e74c' => __DIR__ . '/..' . '/php-di/php-di/src/DI/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'V' =>
        array (
            'Valitron\\' => 9,
        ),
        'P' =>
        array (
            'Psr\\Container\\' => 14,
            'PhpDocReader\\' => 13,
        ),
        'I' =>
        array (
            'Invoker\\' => 8,
            'Interop\\Container\\' => 18,
        ),
        'G' =>
        array (
            'Gettext\\Languages\\' => 18,
            'Gettext\\' => 8,
        ),
        'D' =>
        array (
            'DI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Valitron\\' =>
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'Psr\\Container\\' =>
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpDocReader\\' =>
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'Invoker\\' =>
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'Interop\\Container\\' =>
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Gettext\\Languages\\' =>
        array (
            0 => __DIR__ . '/..' . '/gettext/languages/src',
        ),
        'Gettext\\' =>
        array (
            0 => __DIR__ . '/..' . '/gettext/gettext/src',
        ),
        'DI\\' =>
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src/DI',
        ),
    );

    public static $classMap = array (
        'Calotes\\Base\\Base' => __DIR__ . '/../..' . '/framework/base/base.php',
        'Calotes\\Base\\Component' => __DIR__ . '/../..' . '/framework/base/component.php',
        'Calotes\\Base\\Controller' => __DIR__ . '/../..' . '/framework/base/controller.php',
        'Calotes\\Base\\File' => __DIR__ . '/../..' . '/framework/base/file.php',
        'Calotes\\Base\\Model' => __DIR__ . '/../..' . '/framework/base/model.php',
        'Calotes\\Base\\View' => __DIR__ . '/../..' . '/framework/base/view.php',
        'Calotes\\Component\\Behavior' => __DIR__ . '/../..' . '/framework/component/behavior.php',
        'Calotes\\Component\\Event' => __DIR__ . '/../..' . '/framework/component/event.php',
        'Calotes\\Component\\Request' => __DIR__ . '/../..' . '/framework/component/request.php',
        'Calotes\\Component\\Response' => __DIR__ . '/../..' . '/framework/component/response.php',
        'Calotes\\DB\\Mapper' => __DIR__ . '/../..' . '/framework/db/mapper.php',
        'Calotes\\Helper\\Array_Cache' => __DIR__ . '/../..' . '/framework/helper/array_cache.php',
        'Calotes\\Helper\\HTTP' => __DIR__ . '/../..' . '/framework/helper/http.php',
        'Calotes\\Helper\\Route' => __DIR__ . '/../..' . '/framework/helper/route.php',
        'Calotes\\Model\\Setting' => __DIR__ . '/../..' . '/framework/model/setting.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FrameFiller' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'MaxMind\\Db\\Reader' => __DIR__ . '/../..' . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader.php',
        'MaxMind\\Db\\Reader\\Decoder' => __DIR__ . '/../..' . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/Decoder.php',
        'MaxMind\\Db\\Reader\\InvalidDatabaseException' => __DIR__ . '/../..' . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/InvalidDatabaseException.php',
        'MaxMind\\Db\\Reader\\Metadata' => __DIR__ . '/../..' . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/Metadata.php',
        'MaxMind\\Db\\Reader\\Util' => __DIR__ . '/../..' . '/src/extra/maxmind-db/reader/src/MaxMind/Db/Reader/Util.php',
        'PHP_CodeSniffer\\Config' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Config.php',
        'PHP_CodeSniffer\\Exceptions\\DeepExitException' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Exceptions/DeepExitException.php',
        'PHP_CodeSniffer\\Exceptions\\RuntimeException' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Exceptions/RuntimeException.php',
        'PHP_CodeSniffer\\Exceptions\\TokenizerException' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Exceptions/TokenizerException.php',
        'PHP_CodeSniffer\\Tokenizers\\CSS' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Tokenizers/CSS.php',
        'PHP_CodeSniffer\\Tokenizers\\Comment' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Tokenizers/Comment.php',
        'PHP_CodeSniffer\\Tokenizers\\JS' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Tokenizers/JS.php',
        'PHP_CodeSniffer\\Tokenizers\\PHP' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Tokenizers/PHP.php',
        'PHP_CodeSniffer\\Tokenizers\\Tokenizer' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Tokenizers/Tokenizer.php',
        'PHP_CodeSniffer\\Util\\Cache' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Util/Cache.php',
        'PHP_CodeSniffer\\Util\\Common' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Util/Common.php',
        'PHP_CodeSniffer\\Util\\Standards' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Util/Standards.php',
        'PHP_CodeSniffer\\Util\\Timing' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Util/Timing.php',
        'PHP_CodeSniffer\\Util\\Tokens' => __DIR__ . '/../..' . '/src/extra/php-codesniffer-php-token/Util/Tokens.php',
        'QRbitstream' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRcode' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRencode' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRimage' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRinput' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRinputItem' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRmask' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRrawcode' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRrs' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRrsItem' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRrsblock' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRspec' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRsplit' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRtools' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'QRvect' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
        'WP_Defender\\Admin' => __DIR__ . '/../..' . '/src/class-admin.php',
        'WP_Defender\\Behavior\\Scan\\Core_Integrity' => __DIR__ . '/../..' . '/src/behavior/scan/core-integrity.php',
        'WP_Defender\\Behavior\\Scan\\Gather_Fact' => __DIR__ . '/../..' . '/src/behavior/scan/gather-fact.php',
        'WP_Defender\\Behavior\\Scan\\Known_Vulnerability' => __DIR__ . '/../..' . '/src/behavior/scan/known-vulnerability.php',
        'WP_Defender\\Behavior\\Scan\\Malware_Deep_Scan' => __DIR__ . '/../..' . '/src/behavior/scan/malware-deep-scan.php',
        'WP_Defender\\Behavior\\Scan\\Malware_Quick_Scan' => __DIR__ . '/../..' . '/src/behavior/scan/malware-quick-scan.php',
        'WP_Defender\\Behavior\\Scan\\Malware_Scan' => __DIR__ . '/../..' . '/src/behavior/scan/malware-scan.php',
        'WP_Defender\\Behavior\\Scan\\Plugin_Integrity' => __DIR__ . '/../..' . '/src/behavior/scan/plugin-integrity.php',
        'WP_Defender\\Behavior\\Scan\\Theme_Integrity' => __DIR__ . '/../..' . '/src/behavior/scan/theme-integrity.php',
        'WP_Defender\\Behavior\\Scan_Item\\Core_Integrity' => __DIR__ . '/../..' . '/src/behavior/scan-item/core-integrity.php',
        'WP_Defender\\Behavior\\Scan_Item\\Malware_Result' => __DIR__ . '/../..' . '/src/behavior/scan-item/malware-result.php',
        'WP_Defender\\Behavior\\Scan_Item\\Plugin_Integrity' => __DIR__ . '/../..' . '/src/behavior/scan-item/plugin-integrity.php',
        'WP_Defender\\Behavior\\Scan_Item\\Silent_Skin' => __DIR__ . '/../..' . '/src/behavior/scan-item/vuln-result.php',
        'WP_Defender\\Behavior\\Scan_Item\\Theme_Integrity' => __DIR__ . '/../..' . '/src/behavior/scan-item/theme-integrity.php',
        'WP_Defender\\Behavior\\Scan_Item\\Vuln_Result' => __DIR__ . '/../..' . '/src/behavior/scan-item/vuln-result.php',
        'WP_Defender\\Behavior\\WPMUDEV' => __DIR__ . '/../..' . '/src/behavior/wpmudev.php',
        'WP_Defender\\Behavior\\WPMUDEV_Const_Interface' => __DIR__ . '/../..' . '/src/behavior/wpmudev-const-interface.php',
        'WP_Defender\\Bootstrap' => __DIR__ . '/../..' . '/src/bootstrap.php',
        'WP_Defender\\Central' => __DIR__ . '/../..' . '/src/central.php',
        'WP_Defender\\Component' => __DIR__ . '/../..' . '/src/component.php',
        'WP_Defender\\Component\\Audit' => __DIR__ . '/../..' . '/src/component/audit.php',
        'WP_Defender\\Component\\Audit\\Audit_Event' => __DIR__ . '/../..' . '/src/component/audit/audit-event.php',
        'WP_Defender\\Component\\Audit\\Comment_Audit' => __DIR__ . '/../..' . '/src/component/audit/comment-audit.php',
        'WP_Defender\\Component\\Audit\\Core_Audit' => __DIR__ . '/../..' . '/src/component/audit/core-audit.php',
        'WP_Defender\\Component\\Audit\\Media_Audit' => __DIR__ . '/../..' . '/src/component/audit/media-audit.php',
        'WP_Defender\\Component\\Audit\\Menu_Audit' => __DIR__ . '/../..' . '/src/component/audit/menu-audit.php',
        'WP_Defender\\Component\\Audit\\Options_Audit' => __DIR__ . '/../..' . '/src/component/audit/options-audit.php',
        'WP_Defender\\Component\\Audit\\Post_Audit' => __DIR__ . '/../..' . '/src/component/audit/post-audit.php',
        'WP_Defender\\Component\\Audit\\Users_Audit' => __DIR__ . '/../..' . '/src/component/audit/users-audit.php',
        'WP_Defender\\Component\\Backup_Settings' => __DIR__ . '/../..' . '/src/component/backup-settings.php',
        'WP_Defender\\Component\\Blacklist_Lockout' => __DIR__ . '/../..' . '/src/component/blacklist-lockout.php',
        'WP_Defender\\Component\\Cli' => __DIR__ . '/../..' . '/src/component/cli.php',
        'WP_Defender\\Component\\Config\\Config_Adapter' => __DIR__ . '/../..' . '/src/component/config/config-adapter.php',
        'WP_Defender\\Component\\Config\\Config_Hub_Helper' => __DIR__ . '/../..' . '/src/component/config/config-hub-helper.php',
        'WP_Defender\\Component\\Error_Code' => __DIR__ . '/../..' . '/src/component/error-code.php',
        'WP_Defender\\Component\\Feature_Modal' => __DIR__ . '/../..' . '/src/component/feature-modal.php',
        'WP_Defender\\Component\\Firewall' => __DIR__ . '/../..' . '/src/component/firewall.php',
        'WP_Defender\\Component\\Legacy_Versions' => __DIR__ . '/../..' . '/src/component/legacy-versions.php',
        'WP_Defender\\Component\\Logger\\Rotation_Logger' => __DIR__ . '/../..' . '/src/component/logger/rotation-logger.php',
        'WP_Defender\\Component\\Logger\\Rotation_Logger_Interface' => __DIR__ . '/../..' . '/src/component/logger/rotation-logger-interface.php',
        'WP_Defender\\Component\\Login_Lockout' => __DIR__ . '/../..' . '/src/component/login-lockout.php',
        'WP_Defender\\Component\\Mask_Login' => __DIR__ . '/../..' . '/src/component/mask-login.php',
        'WP_Defender\\Component\\Notfound_Lockout' => __DIR__ . '/../..' . '/src/component/notfound-lockout.php',
        'WP_Defender\\Component\\Notification' => __DIR__ . '/../..' . '/src/component/notification.php',
        'WP_Defender\\Component\\Password_Protection' => __DIR__ . '/../..' . '/src/component/password-protection.php',
        'WP_Defender\\Component\\Scan' => __DIR__ . '/../..' . '/src/component/scan.php',
        'WP_Defender\\Component\\Scan\\Tokens' => __DIR__ . '/../..' . '/src/component/scan/tokens.php',
        'WP_Defender\\Component\\Security_Header' => __DIR__ . '/../..' . '/src/component/security-header.php',
        'WP_Defender\\Component\\Security_Headers\\Sh_Content_Type_Options' => __DIR__ . '/../..' . '/src/component/security-headers/sh-content-type-options.php',
        'WP_Defender\\Component\\Security_Headers\\Sh_Feature_Policy' => __DIR__ . '/../..' . '/src/component/security-headers/sh-feature-policy.php',
        'WP_Defender\\Component\\Security_Headers\\Sh_Referrer_Policy' => __DIR__ . '/../..' . '/src/component/security-headers/sh-referrer-policy.php',
        'WP_Defender\\Component\\Security_Headers\\Sh_Strict_Transport' => __DIR__ . '/../..' . '/src/component/security-headers/sh-strict-transport.php',
        'WP_Defender\\Component\\Security_Headers\\Sh_XSS_Protection' => __DIR__ . '/../..' . '/src/component/security-headers/sh-xss-protection.php',
        'WP_Defender\\Component\\Security_Headers\\Sh_X_Frame' => __DIR__ . '/../..' . '/src/component/security-headers/sh-x-frame.php',
        'WP_Defender\\Component\\Security_Tweak' => __DIR__ . '/../..' . '/src/component/security-tweak.php',
        'WP_Defender\\Component\\Security_Tweaks\\Change_Admin' => __DIR__ . '/../..' . '/src/component/security-tweaks/change-admin.php',
        'WP_Defender\\Component\\Security_Tweaks\\Disable_File_Editor' => __DIR__ . '/../..' . '/src/component/security-tweaks/disable-file-editor.php',
        'WP_Defender\\Component\\Security_Tweaks\\Disable_Trackback' => __DIR__ . '/../..' . '/src/component/security-tweaks/disable-trackback.php',
        'WP_Defender\\Component\\Security_Tweaks\\Disable_XML_RPC' => __DIR__ . '/../..' . '/src/component/security-tweaks/disable-xml-rpc.php',
        'WP_Defender\\Component\\Security_Tweaks\\Hide_Error' => __DIR__ . '/../..' . '/src/component/security-tweaks/hide-error.php',
        'WP_Defender\\Component\\Security_Tweaks\\Login_Duration' => __DIR__ . '/../..' . '/src/component/security-tweaks/login-duration.php',
        'WP_Defender\\Component\\Security_Tweaks\\PHP_Version' => __DIR__ . '/../..' . '/src/component/security-tweaks/php-version.php',
        'WP_Defender\\Component\\Security_Tweaks\\Prevent_Enum_Users' => __DIR__ . '/../..' . '/src/component/security-tweaks/prevent-enum-users.php',
        'WP_Defender\\Component\\Security_Tweaks\\Prevent_PHP' => __DIR__ . '/../..' . '/src/component/security-tweaks/prevent-php.php',
        'WP_Defender\\Component\\Security_Tweaks\\Protect_Information' => __DIR__ . '/../..' . '/src/component/security-tweaks/protect-information.php',
        'WP_Defender\\Component\\Security_Tweaks\\Security_Key' => __DIR__ . '/../..' . '/src/component/security-tweaks/security-key.php',
        'WP_Defender\\Component\\Security_Tweaks\\Security_Key_Const_Interface' => __DIR__ . '/../..' . '/src/component/security-tweaks/security-tweaks-const-interface.php',
        'WP_Defender\\Component\\Security_Tweaks\\Servers\\Apache' => __DIR__ . '/../..' . '/src/component/security-tweaks/servers/apache.php',
        'WP_Defender\\Component\\Security_Tweaks\\Servers\\Flywheel' => __DIR__ . '/../..' . '/src/component/security-tweaks/servers/flywheel.php',
        'WP_Defender\\Component\\Security_Tweaks\\Servers\\IIS_7' => __DIR__ . '/../..' . '/src/component/security-tweaks/servers/iis-7.php',
        'WP_Defender\\Component\\Security_Tweaks\\Servers\\Nginx' => __DIR__ . '/../..' . '/src/component/security-tweaks/servers/nginx.php',
        'WP_Defender\\Component\\Security_Tweaks\\Servers\\Server' => __DIR__ . '/../..' . '/src/component/security-tweaks/servers/server.php',
        'WP_Defender\\Component\\Security_Tweaks\\Servers\\Server_Factory' => __DIR__ . '/../..' . '/src/component/security-tweaks/servers/server-factory.php',
        'WP_Defender\\Component\\Security_Tweaks\\WP_Version' => __DIR__ . '/../..' . '/src/component/security-tweaks/wp-version.php',
        'WP_Defender\\Component\\Table_Lockout' => __DIR__ . '/../..' . '/src/component/table-lockout.php',
        'WP_Defender\\Component\\Timer' => __DIR__ . '/../..' . '/src/component/timer.php',
        'WP_Defender\\Component\\Two_Fa' => __DIR__ . '/../..' . '/src/component/two-fa.php',
        'WP_Defender\\Component\\Two_Factor\\Providers\\Backup_Codes' => __DIR__ . '/../..' . '/src/component/two-factor/providers/backup-codes.php',
        'WP_Defender\\Component\\Two_Factor\\Providers\\Fallback_Email' => __DIR__ . '/../..' . '/src/component/two-factor/providers/fallback-email.php',
        'WP_Defender\\Component\\Two_Factor\\Providers\\Totp' => __DIR__ . '/../..' . '/src/component/two-factor/providers/totp.php',
        'WP_Defender\\Component\\Two_Factor\\Two_Factor_Provider' => __DIR__ . '/../..' . '/src/component/two-factor/two-factor-provider.php',
        'WP_Defender\\Component\\User_Agent' => __DIR__ . '/../..' . '/src/component/user-agent-lockout.php',
        'WP_Defender\\Controller' => __DIR__ . '/../..' . '/src/controller.php',
        'WP_Defender\\Controller\\Advanced_Tools' => __DIR__ . '/../..' . '/src/controller/advanced-tools.php',
        'WP_Defender\\Controller\\Audit_Logging' => __DIR__ . '/../..' . '/src/controller/audit-logging.php',
        'WP_Defender\\Controller\\Blacklist' => __DIR__ . '/../..' . '/src/controller/blacklist.php',
        'WP_Defender\\Controller\\Blocklist_Monitor' => __DIR__ . '/../..' . '/src/controller/blocklist-monitor.php',
        'WP_Defender\\Controller\\Dashboard' => __DIR__ . '/../..' . '/src/controller/dashboard.php',
        'WP_Defender\\Controller\\Firewall' => __DIR__ . '/../..' . '/src/controller/firewall.php',
        'WP_Defender\\Controller\\Firewall_Logs' => __DIR__ . '/../..' . '/src/controller/firewall-logs.php',
        'WP_Defender\\Controller\\HUB' => __DIR__ . '/../..' . '/src/controller/hub.php',
        'WP_Defender\\Controller\\Login_Lockout' => __DIR__ . '/../..' . '/src/controller/login-lockout.php',
        'WP_Defender\\Controller\\Main_Setting' => __DIR__ . '/../..' . '/src/controller/main-setting.php',
        'WP_Defender\\Controller\\Mask_Login' => __DIR__ . '/../..' . '/src/controller/mask-login.php',
        'WP_Defender\\Controller\\Nf_Lockout' => __DIR__ . '/../..' . '/src/controller/nf-lockout.php',
        'WP_Defender\\Controller\\Notification' => __DIR__ . '/../..' . '/src/controller/notification.php',
        'WP_Defender\\Controller\\Onboard' => __DIR__ . '/../..' . '/src/controller/onboard.php',
        'WP_Defender\\Controller\\Password_Protection' => __DIR__ . '/../..' . '/src/controller/password-protection.php',
        'WP_Defender\\Controller\\Password_Reset' => __DIR__ . '/../..' . '/src/controller/password-reset.php',
        'WP_Defender\\Controller\\Recaptcha' => __DIR__ . '/../..' . '/src/controller/recaptcha.php',
        'WP_Defender\\Controller\\Scan' => __DIR__ . '/../..' . '/src/controller/scan.php',
        'WP_Defender\\Controller\\Security_Headers' => __DIR__ . '/../..' . '/src/controller/security-headers.php',
        'WP_Defender\\Controller\\Security_Tweaks' => __DIR__ . '/../..' . '/src/controller/security-tweaks.php',
        'WP_Defender\\Controller\\Tutorial' => __DIR__ . '/../..' . '/src/controller/tutorial.php',
        'WP_Defender\\Controller\\Two_Factor' => __DIR__ . '/../..' . '/src/controller/two-factor.php',
        'WP_Defender\\Controller\\UA_Lockout' => __DIR__ . '/../..' . '/src/controller/ua-lockout.php',
        'WP_Defender\\Controller\\WAF' => __DIR__ . '/../..' . '/src/controller/waf.php',
        'WP_Defender\\DB' => __DIR__ . '/../..' . '/src/db.php',
        'WP_Defender\\Extra\\Base2n' => __DIR__ . '/../..' . '/src/extra/binary-to-text-php/Base2n.php',
        'WP_Defender\\Extra\\GeoIp' => __DIR__ . '/../..' . '/src/extra/geoip.php',
        'WP_Defender\\Extra\\IP_Helper' => __DIR__ . '/../..' . '/src/extra/ip-helper.php',
        'WP_Defender\\Integrations\\MaxMind_Geolocation' => __DIR__ . '/../..' . '/src/integrations/class-maxmind-geolcation.php',
        'WP_Defender\\Integrations\\Smush' => __DIR__ . '/../..' . '/src/integrations/class-smush.php',
        'WP_Defender\\Integrations\\Woocommerce' => __DIR__ . '/../..' . '/src/integrations/class-woocommerce.php',
        'WP_Defender\\Model\\Audit_Log' => __DIR__ . '/../..' . '/src/model/audit-log.php',
        'WP_Defender\\Model\\Email_Track' => __DIR__ . '/../..' . '/src/model/email-track.php',
        'WP_Defender\\Model\\Lockout_Ip' => __DIR__ . '/../..' . '/src/model/lockout-ip.php',
        'WP_Defender\\Model\\Lockout_Log' => __DIR__ . '/../..' . '/src/model/lockout-log.php',
        'WP_Defender\\Model\\Notification' => __DIR__ . '/../..' . '/src/model/notification.php',
        'WP_Defender\\Model\\Notification\\Audit_Report' => __DIR__ . '/../..' . '/src/model/notification/audit-report.php',
        'WP_Defender\\Model\\Notification\\Firewall_Notification' => __DIR__ . '/../..' . '/src/model/notification/firewall-notification.php',
        'WP_Defender\\Model\\Notification\\Firewall_Report' => __DIR__ . '/../..' . '/src/model/notification/firewall-report.php',
        'WP_Defender\\Model\\Notification\\Malware_Notification' => __DIR__ . '/../..' . '/src/model/notification/malware-notification.php',
        'WP_Defender\\Model\\Notification\\Malware_Report' => __DIR__ . '/../..' . '/src/model/notification/malware-report.php',
        'WP_Defender\\Model\\Notification\\Tweak_Reminder' => __DIR__ . '/../..' . '/src/model/notification/tweak-reminder.php',
        'WP_Defender\\Model\\Scan' => __DIR__ . '/../..' . '/src/model/scan.php',
        'WP_Defender\\Model\\Scan_Item' => __DIR__ . '/../..' . '/src/model/scan-item.php',
        'WP_Defender\\Model\\Setting\\Audit_Logging' => __DIR__ . '/../..' . '/src/model/setting/audit-logging.php',
        'WP_Defender\\Model\\Setting\\Blacklist_Lockout' => __DIR__ . '/../..' . '/src/model/setting/blacklist-lockout.php',
        'WP_Defender\\Model\\Setting\\Firewall' => __DIR__ . '/../..' . '/src/model/setting/firewall.php',
        'WP_Defender\\Model\\Setting\\Login_Lockout' => __DIR__ . '/../..' . '/src/model/setting/login-lockout.php',
        'WP_Defender\\Model\\Setting\\Main_Setting' => __DIR__ . '/../..' . '/src/model/setting/main-setting.php',
        'WP_Defender\\Model\\Setting\\Mask_Login' => __DIR__ . '/../..' . '/src/model/setting/mask-login.php',
        'WP_Defender\\Model\\Setting\\Notfound_Lockout' => __DIR__ . '/../..' . '/src/model/setting/notfound-lockout.php',
        'WP_Defender\\Model\\Setting\\Password_Protection' => __DIR__ . '/../..' . '/src/model/setting/password-protection.php',
        'WP_Defender\\Model\\Setting\\Password_Reset' => __DIR__ . '/../..' . '/src/model/setting/password-reset.php',
        'WP_Defender\\Model\\Setting\\Recaptcha' => __DIR__ . '/../..' . '/src/model/setting/recaptcha.php',
        'WP_Defender\\Model\\Setting\\Scan' => __DIR__ . '/../..' . '/src/model/setting/scan.php',
        'WP_Defender\\Model\\Setting\\Security_Headers' => __DIR__ . '/../..' . '/src/model/setting/security-headers.php',
        'WP_Defender\\Model\\Setting\\Security_Tweaks' => __DIR__ . '/../..' . '/src/model/setting/security-tweaks.php',
        'WP_Defender\\Model\\Setting\\Two_Fa' => __DIR__ . '/../..' . '/src/model/setting/two-fa.php',
        'WP_Defender\\Model\\Setting\\User_Agent_Lockout' => __DIR__ . '/../..' . '/src/model/setting/user-agent-lockout.php',
        'WP_Defender\\Traits\\Country' => __DIR__ . '/../..' . '/src/traits/country.php',
        'WP_Defender\\Traits\\Defender_Dashboard_Client' => __DIR__ . '/../..' . '/src/traits/defender-dashboard-client.php',
        'WP_Defender\\Traits\\Defender_Hub_Client' => __DIR__ . '/../..' . '/src/traits/defender-hub-client.php',
        'WP_Defender\\Traits\\Formats' => __DIR__ . '/../..' . '/src/traits/formats.php',
        'WP_Defender\\Traits\\Hummingbird' => __DIR__ . '/../..' . '/src/traits/hummingbird.php',
        'WP_Defender\\Traits\\IO' => __DIR__ . '/../..' . '/src/traits/io.php',
        'WP_Defender\\Traits\\IP' => __DIR__ . '/../..' . '/src/traits/ip.php',
        'WP_Defender\\Traits\\Permission' => __DIR__ . '/../..' . '/src/traits/permission.php',
        'WP_Defender\\Traits\\Plugin' => __DIR__ . '/../..' . '/src/traits/plugin.php',
        'WP_Defender\\Traits\\Security_Tweaks_Option' => __DIR__ . '/../..' . '/src/traits/security-tweaks-option.php',
        'WP_Defender\\Traits\\Setting' => __DIR__ . '/../..' . '/src/traits/setting.php',
        'WP_Defender\\Traits\\Theme' => __DIR__ . '/../..' . '/src/traits/theme.php',
        'WP_Defender\\Traits\\User' => __DIR__ . '/../..' . '/src/traits/user.php',
        'WP_Defender\\Upgrader' => __DIR__ . '/../..' . '/src/upgrader.php',
        'qrstr' => __DIR__ . '/../..' . '/src/extra/phpqrcode/phpqrcode.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7b7d9424ae2fa4d12e80e89a942b1653::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7b7d9424ae2fa4d12e80e89a942b1653::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7b7d9424ae2fa4d12e80e89a942b1653::$classMap;

        }, null, ClassLoader::class);
    }
}