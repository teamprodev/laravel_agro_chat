<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

const keyboard = [
    'Ўзбекистон Республикаси қишлоқ хўжалиги вазирлиги',
    'Қорақалпоғистон Республикаси қишлоқ хўжалиги вазирлиги',
    'Андижон вилояти қишлоқ хўжалиги бошқармаси',
    'Фарғона вилояти қишлоқ хўжалиги бошқармаси',
    'Жиззах вилояти қишлоқ хўжалиги бошқармаси',
    'Хоразм вилояти қишлоқ хўжалиги бошқармаси',
    'Наманган вилояти қишлоқ хўжалиги бошқармаси',
    'Навоий вилояти қишлоқ хўжалиги бошқармаси',
    'Қашқадарё вилояти қишлоқ хўжалиги бошқармаси',
    'Самарқанд вилояти қишлоқ хўжалиги бошқармаси',
    'Сирдарё вилояти қишлоқ хўжалиги бошқармаси',
    'Сурхондарё вилояти қишлоқ хўжалиги бошқармаси',
    'Тошкент вилояти қишлоқ хўжалиги бошқармаси',
    '"Ўздаверлойиҳа" илмий-лойиҳалаш институти',
    '"Академик М.Мирзаев номидаги боғдорчилик, узумчилик
            ва виночилик илмий-тадқиқот институти"',
    'Боғдорчилик ва иссиқхона хўжалигини ривожлантириш агентлиги',
    'Қишлоқ хўжалигида билим ва инновациялар миллий маркази',
    'Уруғчиликни ривожлантириш маркази',
    'Қишлоқ хўжалиги экинлари навларини синаш маркази',
    'Тупроқ таркиби ва репозиторийси, сифати таҳлил маркази',
    'Қишлоқ хўжалиги техникаси ва технологияларини сертификатлаш ва синаш давлат маркази',
    'Қишлоқ хўжалигини стандартлаштириш маркази',
    'Кимёлаштириш ва ўсимликларни ҳимоя қилиш воситаларини синовдан ўтказиш ва рўйхатга олиш бўйича давлат комиссияси Ишчи органи',
    'Тошкент давлат аграр университети',
    'Андижон қишлоқ хўжалиги ва агротехнологиялар институти',
    'Маъмурий-хўжалик хизмати муассасаси',
    'Агросаноатни рақамлаштириш маркази',
];
const keyboarddRu = [
        'Центр агропромышленной цифровизации',
        'Учреждение административно-хозяйственного обслуживания',
        'Андижанский институт сельского хозяйства и агротехнологии',
        'Ташкентский Государственный Аграрный Университет',
        'Рабочий орган Государственной комиссии по испытаниям и регистрации химических веществ и средств защиты растений',
        'Центр стандартизации сельского хозяйства',
        'Государственный центр сертификации и испытаний сельскохозяйственной техники и технологий',
        'Состав и хранилище почв, центр анализа качества',
        'Центр испытаний сортов сельскохозяйственных культур',
        'Центр развития семян',
        'Национальный центр знаний и инноваций в сельском хозяйстве',
        'Агентство развития садоводства и теплиц',
        'Садоводство и виноградарство имени академика М. Мирзаева. и винодельческий научно-исследовательский институт',
        'Уздаверлойиха Научно-исследовательский и проектный институт',
        'Ташкентское областное управление сельского хозяйства',
        'Управление сельского хозяйства Сурхандарьинской области',
        'Сырдарьинское областное управление сельского хозяйства',
        'Управление сельского хозяйства Самаркандской области',
        'Управление сельского хозяйства Кашкадарьинской области',
        'Навоийское областное управление сельского хозяйства',
        'Наманганское областное управление сельского хозяйства',
        'Хорезмское областное управление сельского хозяйства',
        'Управление сельского хозяйства Джизакской области',
        'Управление сельского хозяйства Ферганской области',
        'Андижанское областное управление сельского хозяйства',
        'Министерство сельского хозяйства Республики Узбекистан',
        'Министерство сельского хозяйства Республики Каракалпакстан',
    ];
const keyboardd = [
        'Андижон вилояти',
        'Бухоро вилояти',
        'Жиззах вилояти',
        'Қашқадарё вилояти',
        'Қорақалпоғистон Республикаси',
        'Навоий вилояти',
        'Наманган вилояти',
        'Самарқанд вилояти',
        'Сирдарё вилояти',
        'Сурхондарё вилояти',
        'Тошкент вилояти',
        'Фаргона вилояти',
        'Хоразм вилояти',
    ];

const keyboarddd = [
        'Озиқ-овқат хавсизлиги бўйича',
        'Агротехник тадбирларни ўз вақтида ўтказмаслик бўйича',
        'Минерал ва органик ўғитлардан фойдаланиш бўйича',
        'Қишлоқ хўжалигига мўлжалланган ерлардан фойдаланиш бўйича',
        'Мехнат интизоми бўйича',
        'Молия-ҳўжалик фаолияти бўйича',
        'Давлат харидлари бўйича (товарлар, ишлар ва хизматларни харид қилиш)',
        'Мурожатларни кўриб чиқиш ва ижро интизоми бўйича',
        'Бошка йуналишларда',
    ];
const keyboardddRu = [
        'О продовольственной безопасности',
       'О несвоевременном выполнении агротехнических мероприятий',
        'Об использовании минеральных и органических удобрений',
        'Об использовании земель сельскохозяйственного назначения',
        'Дисциплина коктейлей',
        'О финансово-хозяйственной деятельности',
         'О государственных закупках (закупках товаров, работ, услуг)',
        'О дисциплине и принудительном исполнении',
        'В других направлениях',
    ];
const msgUz = '🗣 Хурматли фуқоролар Қишлоқ хўжалиги вазирлиги тизимида коррупцияга дуч келсангиз, бизга хабар беринг.

        🤳Қишлоқ хўжалиги вазирлиги тизимидаги, жумладан, қишлоқ хўжалиги бошқармалари ва бўлимлари,вазирлик тизимидаги корхоналар, ташкилотлар ва таълим муассасаларидаги коррупция ҳолатлари ҳақида маълумотларни телеграмдаги @UzAgroAnticorruptionBot ботига ва  +998 71 206-70-65 вазирликнинг ишонч телефонига хабар қилиш орқали юборишингиз мумкин.

        ‼️Юборилган хабарлар белгиланган тартибда кўриб чиқилади ҳамда мурожаат қилувчининг шахси сир сақланиши кафолатланади.';
const msgRu = '🗣 Уважаемые граждане! Если вы столкнетесь с коррупцией в системе Минсельхоза, сообщите нам об этом.
//
//        🤳 Информацию о коррупции в системе Минсельхоза, в том числе сельскохозяйственных ведомствах и отделах, предприятиях, организациях и образовательных учреждениях в системе министерства, можно отправить боту @UzAgroAnticorruptionBot в телеграмме и на горячую линию министерства +998 71 206-70-65.
//
//        ‼ ️Отправленные сообщения будут рассмотрены в установленном порядке, и конфиденциальность заявителя будет гарантирована.';


const keyboardRu = [
        'Андижанская область',
        'Бухарская область',
        'Джизакская область',
        'Кашкадарьинская область',
        'Республика Каракалпакстан',
        'Навоийская область',
        'Наманганская область',
        'Самаркандская область',
        'Сырдарьинская область',
        'Сурхандарьинская область',
        'Ташкентская область',
        'Ферганская область',
        'Хорезмская область',
    ];
class ButtonConversation extends Conversation
{

    public function run()
    {
        $question = Question::create('tilni tanlang!')
        ->addButtons([
            Button::create('uzbek')->value('uz'),
            Button::create('русский')->value('ru'),
        ]);

        $this->ask($question, function($answer){
            if($answer->getValue() == 'uz') {
                $this->say(msgUz);
                $questionn = Question::create('Бўлимни танланг!')
                    ->addButtons([
                        Button::create('Вилоятлар')->value('vi'),
                        Button::create('Тузилмалар')->value('tu'),
                    ]);
                $this->ask($questionn,function ($answerr) {
                    if($answerr->getValue() == 'vi') {
                        $ar = [];

                        foreach (keyboardd as $key) {
                            array_push($ar,Button::create($key)->value($key));
                        }
                        $questionn = Question::create('Керакли вилоят танланг!')
                            ->addButtons($ar);
                        $this->ask($questionn,function ($answerr) {
                            $ar = [];

                            foreach (keyboarddd as $key) {
                                array_push($ar,Button::create($key)->value($key));
                            }
                            $questionn = Question::create('Керакли йўналишни танланг!')
                                ->addButtons($ar);

                            $this->ask($questionn,function ($answer){

                                $questionn = Question::create('Сизда ушбу йўналишга оид қандайдир маълумот (видео/аудио/фото/в.х.) бўлса, илова қилган ҳолда бизга юборишингиз мумкин!')

                                    ->addButtons([Button::create('')->value('fd')]);

                                $this->ask($questionn,function ($answer){
                                    $this->say('✅Юборган хабарингиз белгиланган тартибда кўриб чиқилади. Маълумот учун рахмат!');
                                    $this->say('✅boshlashj uchun /start ni yuboring');
                            });
                            });
                        });

                    }
                    elseif ($answerr->getValue() == 'tu') {
                        $ar = [];

                        foreach (keyboard as $key) {
                            array_push($ar,Button::create($key)->value($key));
                        }
                        $questionn = Question::create('Керакли тузилмани танланг!')
                            ->addButtons($ar);
                        $this->ask($questionn,function ($answer) {
                            $questionn = Question::create('Сизда ушбу йўналишга оид қандайдир маълумот (видео/аудио/фото/в.х.) бўлса, илова қилган ҳолда бизга юборишингиз мумкин!')->addButton(Button::create('')->value('fd'));
                            $this->ask($questionn,function ($answer){
                                $this->say('✅Юборган хабарингиз белгиланган тартибда кўриб чиқилади. Маълумот учун рахмат!');
                                $this->say('✅boshlashj uchun /start ni yuboring');
                            });
                        });
                    }
                });
            }
            elseif ($answer->getValue() == 'ru') {

                $this->say(msgRu);
                $questionn = Question::create('Выберите раздел!')
                    ->addButtons([
                        Button::create('Провинции')->value('vi'),
                        Button::create('Структуры')->value('tu'),
                    ]);
                $this->ask($questionn,function ($answerr) {
                    if($answerr->getValue() == 'vi') {
                        $ar = [];

                        foreach (keyboardRu as $key) {
                            array_push($ar,Button::create($key)->value($key));
                        }
                        $questionn = Question::create('Выберите желаемый регион!')
                            ->addButtons($ar);
                        $this->ask($questionn,function ($answerr) {
                            $ar = [];

                            foreach (keyboardddRu as $key) {
                                array_push($ar,Button::create($key)->value($key));
                            }
                            $questionn = Question::create('Выберите желаемое направление!')
                                ->addButtons($ar);

                            $this->ask($questionn,function ($answer){

                                $questionn = Question::create('Если у вас есть какая-либо информация по этому направлению (видео / аудио / фото / и т. Д.), Вы можете прислать ее нам с приложением.!')

                                    ->addButtons([Button::create('')->value('fd')]);

                                $this->ask($questionn,function ($answer){
                                    $this->say('✅Ваше сообщение будет рассмотрено в установленном порядке. Спасибо за информацию!');
                                    $this->say('✅Отправить /start, чтобы начать');
                                });
                            });
                        });

                    }
                    elseif ($answerr->getValue() == 'tu') {
                        $ar = [];

                        foreach (keyboarddRu as $key) {
                            array_push($ar,Button::create($key)->value($key));
                        }
                        $questionn = Question::create('Выберите желаемую структуру!')
                            ->addButtons($ar);
                        $this->ask($questionn,function ($answer) {
                            $questionn = Question::create('Если у вас есть какая-либо информация по этому направлению (видео / аудио / фото / и т. Д.), Вы можете прислать ее нам с приложением!')->addButton(Button::create('')->value('fd'));
                            $this->ask($questionn,function ($answer){
                                $this->say('✅Ваше сообщение будет рассмотрено в установленном порядке. Спасибо за информацию!. ');
                                $this->say('✅Отправить /start, чтобы начать');
                            });
                        });
                    }
                });

            }
        });
    }
}