<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'play_more' => '',
    'require_login' => 'Каб працягнуць, увайдзіце.',
    'require_verification' => 'Калі ласка, каб працягнуць, пацвердзіце верыфікацыю.',
    'restricted' => "Нельга рабіць гэта падчас абмежавання.",
    'silenced' => "Нельга рабіць гэта падчас зацішша.",
    'unauthorized' => 'Доступ забаронены.',

    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'Нельга адмяніць хайп.',
            'has_reply' => 'Нельга выдаліць абмеркаванне з адказамі',
        ],
        'nominate' => [
            'exhausted' => 'Вы дасягнуліі ліміту намінацый, паспрабуйце нанова заўтра.',
            'incorrect_state' => 'Узнікла невядомая памылка, паспрабуйце перазагрузіць старонку.',
            'owner' => "Нельга намінаваць уласную бітмапу.",
            'set_metadata' => 'Вы павінны вызначыць жанр и мову перад намінаваннем.',
        ],
        'resolve' => [
            'not_owner' => 'Толькі стваральнік тэмы і бітмапы можа скончыць абмеркаванне.',
        ],

        'store' => [
            'mapper_note_wrong_user' => 'Толькі ўладальнік бітмапы або намінатар/член суполкі можа размяшчаць нататкі для мапераў.',
        ],

        'vote' => [
            'bot' => "",
            'limit_exceeded' => 'Трохі пачакайце перш, чым працягнуць галасаваць далей',
            'owner' => "Нельга прагаласаваць за ўласнае абмеркаванне.",
            'wrong_beatmapset_state' => 'Магчыма толькі прагаласаваць у абмеркаваннях бітмап, што чакаюцца.',
        ],
    ],

    'beatmap_discussion_post' => [
        'destroy' => [
            'not_owner' => 'Вы можаце выдаляць толькі вашыя запісы.',
            'resolved' => 'Вы не можаце выдаліць запіс вырашанага абмеркавання.',
            'system_generated' => 'Немагчыма выдаліць аўтаматычна створаны допіс.',
        ],

        'edit' => [
            'not_owner' => 'Толькі аўтар можа рэдагаваць допіс.',
            'resolved' => 'Вы не можаце рэдагаваць запіс вырашанага абмеркавання.',
            'system_generated' => 'Немагчыма рэдагаваць аўтаматычна створаны допіс.',
        ],

        'store' => [
            'beatmapset_locked' => 'Гэта бітмапа заблакавана для абмеркавання.',
        ],
    ],

    'beatmapset' => [
        'metadata' => [
            'nominated' => '',
        ],
    ],

    'chat' => [
        'blocked' => 'Нельга адправіць паведамленне карыстальніку, які заблакаваў вас або якога заблакаваў вы.',
        'friends_only' => 'Карыстальнік заблакаваў паведамленні ад людзей, якіх няма ў спісе сяброў.',
        'moderated' => 'Канал зараз мадэруецца.',
        'no_access' => 'Вы не маеце доступу да гэтага каналу.',
        'restricted' => 'Нельга адпраўляць паведамленні, калі вы ў спісе забаненых, абмежаваных або рыд-онлі.',
        'silenced' => '',
    ],

    'comment' => [
        'update' => [
            'deleted' => "Нельга рэдагаваць выдалены допіс.",
        ],
    ],

    'contest' => [
        'voting_over' => 'Немагчыма змяніць голас пасля сканчэння перыяду галасавання.',
    ],

    'forum' => [
        'moderate' => [
            'no_permission' => 'Няма дазволу на модэрацыю гэтага форуму.',
        ],

        'post' => [
            'delete' => [
                'only_last_post' => 'Толькі апошні допіс можа быць выдалены.',
                'locked' => 'Нельга выдаліць допіс у закрытай тэме.',
                'no_forum_access' => 'Неабходны дазвол да запытанага форуму.',
                'not_owner' => 'Толькі аўтар можа выдаліць гэты допіс.',
            ],

            'edit' => [
                'deleted' => 'Нельга рэдагаваць выдалены допіс.',
                'locked' => 'Допіс абаронены ад рэдагавання.',
                'no_forum_access' => 'Неабходны дазвол да запытанага форуму.',
                'not_owner' => 'Толькі аўтар можа рэдагаваць гэты допіс.',
                'topic_locked' => 'Нельга рэдагаваць допіс у закрытай тэме.',
            ],

            'store' => [
                'play_more' => 'Першая чым ствараць допісы на форуме, паспрабуйце пагуляць у гульню! Калі вы маеце праблемы з гульнёй, то звярніцеся да форуму «Дапамога і падтрымка».',
                'too_many_help_posts' => "Перш чым размяшчаць дадатковыя допісы, пагуляйце ў гульню паболей. Калі вы ўсё яшчэ маеце праблемы з гульнёй, то звярніцеся на эл. пошту support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Калі ласка, адрэдагуйце ваш апошні допіс замест паўторнага стварэння.',
                'locked' => 'Нельга адказваць у закрытай гутаркі.',
                'no_forum_access' => 'Неабходны дазвол да запытанага форуму.',
                'no_permission' => 'Няма дазволу для адказу.',

                'user' => [
                    'require_login' => 'Каб адказаць, увайдзіце.',
                    'restricted' => "Нельга адказваць падчас абмеркавання.",
                    'silenced' => "Нельга адказваць падчас зацішша.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Неабходны дазвол да запытанага форуму.',
                'no_permission' => 'Няма дазволу для стварэння новых тэм.',
                'forum_closed' => 'Нельга апублікоўваць, калі форум закрыты.',
            ],

            'vote' => [
                'no_forum_access' => 'Неабходны дазвол да запытанага форуму.',
                'over' => 'Апытанне завершана і больш нельга ў ёй галасаваць.',
                'play_more' => 'Вам трэба боль гульняў, каб галасаваць на форуме.',
                'voted' => 'Змяняць свой голас недазволена.',

                'user' => [
                    'require_login' => 'Увайдзіце, каб прагаласаваць.',
                    'restricted' => "Нельга галасаваць падчас абмежавання.",
                    'silenced' => "Нельга галасаваць падчас зацішша.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Неабходны дазвол да запытанага форуму.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Няправільна вызначаная вокладка.',
                'not_owner' => 'Толькі ўладальнік можа змяняць вокладку.',
            ],
            'store' => [
                'forum_not_allowed' => 'Гэты форум не дазваляе тэмавыя вокладкі.',
            ],
        ],

        'view' => [
            'admin_only' => 'Толькі кіраўнік можа праглядаць гэты форум.',
        ],
    ],

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Старонка карыстальніка заблакавана.',
                'not_owner' => 'Магчыма рэдагаваць толькі ўласную старонку.',
                'require_supporter_tag' => 'неабходны osu!supporter.',
            ],
        ],
    ],
];
