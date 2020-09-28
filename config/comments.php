<?php

return [
    '*' => [
        'indexSidebarLimit' => 25,
        'indexSidebarGroup' => true,
        'indexSidebarIndividualElements' => false,
        'defaultQueryStatus' => ['approved'],

        // General
        'allowAnonymous' => true,
        'guestRequireEmailName' => true,
        'requireModeration' => false,
        'moderatorUserGroup',
        'autoCloseDays' => '',

        // Voting
        'allowVoting' => false,
        'allowAnonymousVoting' => false,
        'downvoteCommentLimit' => 5,
        'hideVotingForThreshold' => false,

        // Flagging
        'allowFlagging' => false,
        'allowAnonymousFlagging' => false,
        'flaggedCommentLimit' => 5,

        // Templates - Default
        'showAvatar' => false,
        'placeholderAvatar' => '',
        'showTimeAgo' => true,
        'outputDefaultCss' => true,
        'outputDefaultJs' => true,

        // Templates - Custom
        'templateFolderOverride' => '',

        // Security
        'enableSpamChecks' => true,
        'securityMaxLength' => '',
        'securityFlooding' => '',
        'securityModeration' => '',
        'securityBlacklist' => '',
        'securityBanned' => '',
        'recaptchaEnabled' => true,
        'recaptchaKey' => '6LeV584ZAAAAALelcbztu8gAYY3om1JNSkwNuUpr',
        'recaptchaSecret' => '6LeV584ZAAAAAHEZYCb1Se4arp-AobUq-AY9KkEJ',

        // Notifications
        'notificationAuthorEnabled' => true,
        'notificationReplyEnabled' => true,
        'notificationSubscribeAuto' => false,
        'notificationSubscribeDefault' => true,
        'notificationSubscribeEnabled' => false,
        'notificationSubscribeCommentEnabled' => false,
        'notificationModeratorEnabled' => false,
        'notificationModeratorApprovedEnabled' => false,

        // Permissions
        'permissions' => [],
    ]
];
