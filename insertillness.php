<?php
include "header.php";
$illness = array('آب‌ سیاه‌ چشم‌، نوع‌ زاویه‌ بسته‌ اولیه‌ ـ glaucoma primary close angle',
	'آب‌ سیاه‌ چشم‌، نوع‌ مزمن‌ زاویه‌ باز ـ glaucoma chronic open angle',
	'آب‌ مروارید ـ cataract',
	'آبسه‌ آنوركتال‌ ـ anorectal abscess',
	'آبسه‌ پستان‌ ـ breast abscess',
	'آبسه‌ ریه‌ ـ lung abscess',
	'آبسه‌ مغزی‌ یا اپی‌دورال‌ ـ brain or epidural abscess',
	'آبله‌ مرغان‌ ـ chickenpox',
	'آپاندیسیت ـ appendicitis ',
	'آترواسكلروز (تصلب‌ شرایین‌) ـ atherosclerosis',
	'آتلكتازی‌ ـ atelectasis',
	'آرتریت‌ روماتویید كودكان‌ ـ arthritis juvenile rheumatoid',
	'آرتریت‌ عفونی‌ (چركی‌) ـ arthritis infectious',
	'آرتریت‌ مرتبط‌ با پسوریازیس‌ ـ psoriatic arthritis',
	'آرتیت‌ روماتوئید ـ arthritis rheumatoid',
	'آرنج‌ تنیس‌بازان ـ tennis elbow ',
	'آزبستوز ـ asbestosis',
	'آسم‌ ـ asthma',
	'آسیب‌ به‌ گوش‌ میانی‌ در اثر تغییرات‌ فشاری‌ ـ barotitis media',
	'آفت دهان ـ canker sores',
	'آفتاب‌زدگی‌ (حساسیت‌ به‌ نور آفتاب‌) ـ sun poisoning',
	'آفتاب‌سوختگی‌ ـ sunburn',
	'آكنه‌ (جوشهای‌ غرور) ـ acne',
	'آكنه‌ روزاسه‌ ـ acne rosacea',
	'آلرژی‌ غذائی‌ ـ allergy food',
	'آمبولی‌ ریه‌ ـ pulmonary embolism',
	'آمپیم‌ ـ empyema',
	'آمفیزم‌ ـ emphysema',
	'آمنوره‌ (قطع‌ قاعدگی‌) ثانویه‌ ـ amenorrhea secondary',
	'آمنوره‌ اولیه‌ ـ amenorrhea primary',
	'آمیبیاز (اسهال‌ خونی‌ آمیبی‌) ـ amebiasis',
	'آمیوتروفیك‌ لاترال‌ اسكلروز ـ amyotrophic lateral sclerosis',
	'آنافیلاكسی‌ (شوك‌ آلرژیك‌) ـ anaphylaxis',
	'آندوكاردیت‌ ـ endocarditis',
	'آندومتریوز ـ endometriosis',
	'آنرژین‌ صدری‌ ـ angina pectoris',
	'آنسفالیت‌ ویروسی‌ ـ encephalitis viral',
	'آنفلوانزا ـ influenza',
	'آنوریسم‌ ـ aneurysm',
	'اپیدیدیمیت‌ ـ epididymitis',
	'اپی‌گلوتیت‌ ـ epiglottitis',
	'اتواسكلروز ـ otosclerosis',
	'اختلال‌ تنش‌زای‌ پس‌ از حادثه‌ ـ post traumatic stress disorder',
	'اختلال‌ خلقی‌ فصلی‌ ـ seasonal affective disorder',
	'اختلال‌ دوقطبی‌ ـ bipolar disorder',
	'اختلال‌ رشد بچه‌ ـ failure to thrive',
	'اختلال‌ كم‌ توجهی‌ ـ بیش‌ فعالی‌ ـ attention deficit hyperactivity disorder',
	'اختلال‌ هراس‌ ـ panic disorder',
	'اختلالات‌ آب‌ و الكترولیت‌ ـ fluid and electrolyte disorders',
	'اختلالات‌ سازگاری‌ ـ adjustment disorders',
	'اختلالات‌ شخصیت‌ ـ personality disorders',
	'ادم‌ ریه‌ ـ pulmonary edema',
	'اریتم‌ گرهی‌ ـ erythema nodosum',
	'اریتم‌ مولتی‌فرم‌ ـ erythema multiforme',
	'اسپوروتریكوز ـ sporotrichosis',
	'اسپوندیلوز گردن‌ ـ cervical spondylosis',
	'اسپوندیلیت‌ آنكیلوزان‌(بیماری ماری ـ استرامپل؛AS) ـ spondylitis ankylosing',
	'استئوآرتریت‌ ـ osteoarthritis',
	'استئومیلیت‌ ـ osteomyelitis',
	'استرس‌ ـ stress',
	'استفراغ‌ شدید حاملگی‌ ـ hyperemesis gravidarum',
	'استوماتیت‌ ـ stomatitis',
	'اسكلرودرمی‌ ـ scleroderma',
	'اسكلروز متعدد (اِم‌. اِس‌) ـ multiple sclerosis',
	'اسكولیوز ـ scoliosis',
	'اسكیزوفرنی‌ ـ schizophrenic disorders',
	'اسهال‌ حاد ـ diarrhea acute',
	'اسهال‌ خونی‌ باكتریایی‌ (شیگلوز) ـ dysentery bacillary',
	'اسهال‌ مزمن‌ غیراختصاصی‌ دوران‌ كودكی‌ ـ diarrhea chronic non specific of childhood',
	'اضطراب‌ ـ anxiety',
	'افسردگی‌ ـ depression',
	'افسردگی‌ پس‌ از زایمان‌ ـ postpartum depression',
	'افسردگی‌ خفیف‌ (دیس‌تایمی)‌ ـ dysthymia',
	'اكتروپیون‌ ـ ectropion',
	'اگزما ـ eczema',
	'التهاب‌ تیرویید (تیروییدیت‌) ـ thyroiditis',
	'التهاب‌ زبان‌ (گلوسیت‌) ـ tongue inflammation',
	'التهاب‌ عنبیه‌ ـ iritis',
	'التهاب‌ قرنیه‌ (كراتیت‌) ـ keratitis',
	'التهاب‌ ملتحمه‌ ـ conjunctivitis',
	'الكلیسم‌ ـ alcoholism',
	'انتروپیون‌ ـ entropion',
	'انتروكولیت‌ با غشای‌ كاذب‌ ـ pseudomembranous enterocolitis',
	'انحراف‌ تیغه‌ بینی‌ ـ nasal septum deviated',
	'انحراف‌ چشم‌ ـ strabismus',
	'انعقاد داخل‌ عروق‌ منتشر ـ disseminated intravascular coagulation',
	'اورتریت‌ ـ urethritis',
	'اوریون‌ ـ mumps',
	'ایدز ـ HIV and aids',
	'ایست‌ قلبی‌ ـ cardiac arrest',
	'بالانیت‌ ـ balanitis',
	'بثورات‌ ناشی‌ از بستن‌ پوشك‌ ـ diaper rash',
	'برجس‌ (ویتیلیگو) ـ vitiligo',
	'برفك‌ (كاندیدیاز دهانی‌) ـ thrush',
	'برونشكتازی‌ ـ bronchiectasis',
	'برونشیت‌ حاد ـ bronchitis acute',
	'برونشیت‌ مزمن‌ ـ bronchitis chronic',
	'برونشیولیت‌ ـ bronchiolitis',
	'بسته‌ شدن‌ مجرای‌ گوش‌ توسط‌ موم‌ گوش‌ ـ earwax blockage',
	'بلاستومیكوز ـ blastomycosis',
	'بلفاریت‌ ـ blepharitis',
	'بلوك‌ قلبی‌ ـ heart block',
	'بواسیر ـ hemorrhoids',
	'بوتولیسم ـ botulism',
	'بورسیت‌ ـ bursitis',
	'بولیمی‌ ـ bulimia',
	'بونیون‌ ـ bunion',
	'به‌ هم‌ خوردن‌ تعادل‌ كلسیم‌ خون‌ ـ calcium imbalance',
	'بی‌اختیاری‌ اجابت‌ مزاج‌ در كودكان‌ ـ encopresis',
	'بی‌اختیاری‌ ادرار ـ incontinence functional',
	'بی‌اختیاری‌ ادرار استرسی‌ ـ Incontinence stress',
	'بی‌اختیاری‌ ادرار فوریتی‌ ـ incontinence urge',
	'بی‌اشتهایی‌ عصبی‌ ـ anorexia nervosa',
	'بی‌خوابی‌ ـ insomnia',
	'بیرون‌زدگی‌ رحم‌ ـ uterine prolapse',
	'بیماری‌ آدیسون‌ ـ addisons disease',
	'بیماری‌ آلزایمر ـ alzheimers disease',
	'بیماری‌ اسگود ـ شلاتر ـ osgood schlatter disease',
	'بیماری‌ انسداد ریوی‌ مزمن‌ ـ chronic obstructive pulmonary disease',
	'بیماری‌ برگر ـ buergers disease',
	'بیماری‌ پاركینسون‌ ـ parkinsons disease',
	'بیماری‌ پاژه‌ استخوان‌ ـ pagets disease of bone',
	'بیماری‌ تای‌ ساكس‌ ـ tay sachs disease',
	'بیماری‌ حركت‌ ـ motion sickness',
	'بیماری‌ دریچه‌ای‌ قلب‌ ـ heart valve disease',
	'بیماری دست، پا و دهان ـ hand foot and mouth disease',
	'بیماری‌ دیورتیكولی‌ ـ diverticular disease',
	'بیماری‌ سرخرگ‌های‌ قلب‌ ـ coronary artery disease',
	'بیماری‌ سلیاك‌ ـ celiac disease',
	'بیماری‌ فیبروكیستیك‌ پستان‌ ـ fibrocystic breast disease',
	'بیماری‌ قلب‌ ناشی‌ از مشكل‌ ریه‌ ـ cor pulmonale',
	'بیماری‌ كرون‌ ـ crohns disease',
	'بیماری‌ لِگ‌ ـ كالو ـ پرتس‌ ـ legg calve perthes disease',
	'بیماری‌ لایم‌ ـ lyme disease',
	'بیماری‌ مِنِیر ـ meniers disease',
	'بیماری‌ ناشی‌ از تابش‌ اشعه‌ ـ radiation sickness',
	'بیماری‌ ناشی‌ از كاهش‌ ناگهانی‌ فشار ـ decompression sickness',
	'بیماری‌ هوچكین‌ ـ hodgkins disease',
	'بیماری‌های‌ نقص‌ ایمنی‌ ـ immunodeficiency diseases',
	'پارگی‌ پرده‌ گوش‌ ـ eardrum ruptured',
	'پارگی‌ و بیرون‌زدگی‌ دیسك‌ بین‌ مهره‌ای‌ ـ disk ruptured',
	'پارونیشیا ـ paronychia',
	'پانكراتیت‌ ـ pancreatitis',
	'پای‌ دیابتی‌ و مشكلات‌ پوستی‌ ـ diabetes feet and skin problems',
	'پای‌ ورزشكاران‌ ـ athletes foot',
	'پدیده‌ و بیماری‌ رینود ـ raynauds disease and phenomenon',
	'پركاری‌ پاراتیرویید ـ hyperparathyroidism',
	'پركاری‌ تیرویید ـ hyperthyroidism',
	'پروكتیت‌ ـ proctitis',
	'پرولاپس‌ دریچه‌ میترال‌ ـ mitral valve prolapse',
	'پره‌اكلامپسی‌ و اكلامپسی‌ ـ preeclampsia and eclampsia',
	'پریتونیت‌ ـ peritonitis',
	'پریكاردیت‌ حاد ـ pericarditis acute',
	'پریودنتیت‌ (التهاب‌ لثه)‌ ـ periodontitis',
	'پسوریازیس‌ ـ psoriasis',
	'پسیتاكوز ـ psittacosis',
	'پلورزی‌ (پلوریت‌؛ پلورو دینی)‌ ـ pleurisy',
	'پلی‌ آرتریت‌ گرهی‌ ـ polyarteritis nodosa',
	'پلی‌ سیتمی‌ ـ polycythemia',
	'پلی‌میالژی‌ روماتیكا یا آرتریت‌ گیجگاهی‌ ـ polymyalgia rheumatica or temporal arteritis',
	'پلی‌میوزیت‌ و درماتومیوزیت‌ ـ polymyositis and dermatomyositis',
	'پنوموتوراكس‌ ـ pneumothorax',
	'پنوموكونیوز ـ pneumoconiosis',
	'پنومونی‌ باكتریایی‌ ـ pneumonia bacterial',
	'پنومونی‌ پنوموسیستیس‌ كارینی‌ ـ pneumonia pneumocystis carinii',
	'پنومونی‌ مایكوپلاسمایی‌ ـ pneumonia mycoplasmal',
	'پنومونی‌ ویروسی‌ ـ pneumonia viral',
	'پورپورای‌ آلرژیك‌ ـ purpura allergic',
	'پورفیری‌ ـ porphyria',
	'پوكی‌ استخوان‌ ـ osteoporosis',
	'پولیپ‌ بینی‌ ـ nasal polyps',
	'پولیپ‌ روده‌ بزرگ‌ ـ large intestine polyp',
	'پولیپ‌ گردن‌ رحم‌ ـ cervical polyps',
	'پیتریازیس‌ آلبا ـ pityriasis alba',
	'پیتریازیس‌ روزه‌آ ـ pityriasis rosea',
	'پیچ‌خوردگی‌ بیضه‌ ـ testicle torsion',
	'پیچ‌خوردگی‌ و كشیدگی‌ ـ sprains and strains',
	'پیكا ـ pica',
	'تاندونیت‌ و تنوسینوویت‌ ـ tendinitis and tenosynovitis',
	'تب‌ با منشأ نامشخص‌ ـ fever of unknown origin',
	'تب‌ دره‌ (كوكسیدیومایكوز) ـ valley fever',
	'تب‌ روماتیسمی‌ ـ rheumatic fever',
	'تب‌ مالت‌ ـ brucellosis',
	'تب یونچه (رینیت آلرژیك) ـ hayfever',
	'تب‌خال‌ ـ cold sore',
	'تب‌خال‌ ناحیه‌ تناسلی‌ ـ herpes genital',
	'ترس‌ مرضی‌ ـ phobias',
	'ترومبوز آمبولی‌ شریانی‌ ـ thrombosis and embolus arterial',
	'ترومبوز ورید عمقی‌ ـ thrombosis deep vein',
	'ترومبوسیتوپنی‌ ـ thrombocytopenia',
	'ترومبوفلبیت‌ ـ thrombophlebitis superficial',
	'تریشینوز ـ trichinosis',
	'تشنج‌ ناشی‌ از تب‌ ـ convulsion febrile',
	'تعریق‌ بیش‌ از اندازه‌ ـ hyperhidrosis',
	'تغییر بافت‌ پوششی‌ گردن‌ رحم‌ ـ cervical erosion',
	'تند شدن‌ غیرطبیعی‌ ضربان‌ قلب‌(تندضربانی) ـ heartbeat rapid',
	'تنفس‌ سریع‌ (در اثر اضطراب‌ زیاد) ـ hyperventilation',
	'تنگی‌ مادرزادی‌ پیلور ـ pyloric stenosis congenital',
	'تنگی‌ مری‌ یا ازوفاژیت‌ خورنده‌ ـ esophageal stricture or corrosive esophagitis',
	'تنگی‌ هیپرتروفیك‌ زیر آئورت‌ با علت‌ ناشناخته‌ ـ idiopathic hypertrophic subaortic stenosis',
	'تورتیكولی‌ (كجی‌ گردن‌) ـ torticollis',
	'توكسوپلاسموز ـ toxoplasmosis',
	'تومور طناب‌ نخاعی‌ ـ spinal cord tumor',
	'تومور مثانه‌ ـ bladder tumor',
	'تومور مغزی‌ ـ brain tumor',
	'تومور ویلمز ـ wilms tumor',
	'تومورهای‌ خوش‌خیم‌ دهان‌ و زبان‌ ـ mouth or tongue tumor bening',
	'تومورهای‌ غدد بزاقی‌ ـ salivary gland tumor',
	'تومورهای‌ فیبرویید رحم‌ ـ fibroid tumors of the uterus',
	'تومورهای‌ هیپوفیز ـ pituitary tumor',
	'تونسیلیت‌ ـ tonsillitis',
	'تیفوس‌ كنه‌ای‌ ـ tick typhus',
	'جدا شدن‌ جفت‌ قبل‌ از زایمان‌ ـ abruptio placentea',
	'جداشدگی‌ شبكیه‌ ـ retinal detachment',
	'جسم‌ خارجی‌ در چشم‌ ـ eye foreign body in',
	'جمود مفصل‌ شانه‌ (كپسولیت‌ چسبنده‌) ـ shoulder-frozen',
	'چاقی‌ ـ obesity',
	'حاملگی‌ خارج‌ رحمی‌ ـ ectopic pregnancy',
	'حصبه‌ (تب‌ روده‌ای‌) ـ typhoid fever',
	'حمله‌ ایسكمیك‌ گذرا (TIA) ـ transient ischemic attack',
	'حمله‌ قلبی‌ (انفاركتوس‌ عضله‌ قلب‌) ـ heart attack',
	'خار پاشنه‌ پا ـ heel spur',
	'خارش‌ زمستانی‌ (اگزمای‌ خشك‌) ـ winter itch',
	'خال‌های‌ پوستی‌ دیسپلاستیك‌ ـ nevl dysplastic',
	'خراشیدگی‌ یا زخم‌ قرنیه‌ ـ corneal abrasion and ulcer',
	'خروسك‌ ـ croup',
	'خودبیمارانگاری‌ ـ hypochondriasis',
	'خونریزی‌ بینی‌ ـ nosebleed',
	'خونریزی‌ خارج‌ سخت‌شامه‌ای‌ ـ extradural hemorrhage',
	'خونریزی‌ رحم‌ پس‌ از یائسگی‌ ـ uterine bleeding postmenopausal',
	'خونریزی‌ رحم‌ در اثر اختلال‌ كاركرد(خونریزی‌ غیر طبیعی‌ قبل‌ از یائسگی‌ از رحم‌) ـ uterine bleeding dysfunctional',
	'خونریزی‌ زیر ملتحمه‌ ـ subconjunctival hemorrhage',
	'خونریزی‌ زیرعنكبوتیه‌ ـ subarachnoid hemorrhage',
	'خونریزی‌ و هماتوم‌ زیرسخت‌شامه‌ ـ subdural hemorrhage and hematoma',
	'در آستانه‌ غرق‌ شدگی ـ drowning near',
	'در رفتگی‌ یا نیم‌دررفتگی‌ ـ dislocation or subluxation',
	'درد به‌ هنگام‌ مقاربت‌ جنسی‌ در زنان‌ ـ dyspareunia',
	'درد در قسمت‌ پایینی‌ كمر ـ back pain',
	'درد عصب‌ سه‌ قلو (نورالژی‌ تری‌ ژمینال‌) ـ trigeminal neuralgia',
	'درد قاعدگی‌ ـ dysmenorrhea',
	'درماتیت‌ آتوپیك‌ ـ dermatitis atopic',
	'درماتیت‌ تماسی‌ ـ dermatitis contact',
	'درماتیت‌ شوره‌ای‌ ـ dermatitis seborrheic',
	'درماتیت‌ هرپتی‌ فرم‌ ـ dermatitis herpetiformis',
	'درهم‌روی‌ روده‌ ـ intussusception',
	'دندان‌ در آوردن‌ ـ teething',
	'دندان‌ قروچه‌ ـ tooth grinding',
	'دهان خندقی‌(ژنژیویت زخمی نكروزدهنده،بیماری ونسان) ـ trench mouth',
	'دیابت‌ بیمزه‌ ـ diabetes insipidus',
	'دیابت‌ حاملگی‌ ـ gestational diabetes mellitus',
	'دیابت‌ شیرین‌ غیروابسته‌ به‌ انسولین‌ ـ diabetes mellitus non insulin dependent',
	'دیابت‌ شیرین‌ وابسته‌ به‌ انسولین‌ ـ diabetes mellitus insulin dependent',
	'دیس‌ هیدروز ـ dyshidrosis',
	'دیسپلازی‌ گردن‌ رحم‌ ـ cervical dysplasia',
	'دیستروفی‌ عضلانی‌ ـ muscular dystrophy',
	'دیفتری‌ ـ diphtheria',
	'روزئولا اینفانتوم‌ ـ roseola infantum',
	'زخم‌ پپتیك‌ (زخم‌ دوازدهه‌، زخم‌ معده‌) ـ ulcer peptic',
	'زخم‌ سطحی‌ معده‌ ـ gastric erosion',
	'زرد زخم‌ ـ impetigo',
	'زگیل‌ (وروكا ولگاریس‌) ـ warts',
	'زگیل‌های‌ مقاربتی‌ (زگیل‌های‌ تناسلی‌، زگیل‌های‌ مرطوب‌) ـ warts venereal',
	'زوال‌ عقل‌ (دمانس‌) ـ dementia',
	'زونا (هرپس‌ زوستر) ـ herpes zoster',
	'ژنژیویت‌ ـ gingivitis',
	'ژیاردیاز ـ giardiasis',
	'ساركوم‌ كاپوسی‌ ـ Kaposis sarcoma',
	'سرخجه‌ ـ rubella',
	'سرخك‌ ـ measles',
	'سردرد تنشی‌ یا عروقی‌ ـ headache tension or vascular',
	'سردرد خوشه‌ای ـ headache cluster',
	'سرطان‌ بیضه‌ ـ testicular cancer',
	'سرطان‌ پستان‌ ـ breast cancer',
	'سرطان‌ پوست‌، سرطان‌ سلول‌ پایه‌ای‌ ـ skin cancer basal cell',
	'سرطان‌ پوست‌، سرطان‌ سلول‌ سنگفرشی‌ ـ skin cancer squamous cell',
	'سرطان‌ حنجره‌ ـ larynx cancer',
	'سرطان‌ دهان‌ ـ oral cancer',
	'سرطان‌ رحم ـ uterine cancer',
	'سرطان‌ روده‌ بزرگ‌ ـ large intestine cancer',
	'سرطان‌ ریه‌ ـ lung cancer',
	'سرطان‌ كبد ـ liver cancer',
	'سرطان‌ گردن‌ رحم‌ ـ cervical cancer',
	'سرطان‌ لوزالمعده‌ ـ pancreatic cancer',
	'سرطان‌ مری‌ ـ esophagus cancer',
	'سرطان‌ معده‌ ـ stomach cancer',
	'سرطان‌ مهبل‌ یا وولو ـ vagina or vulva cancer of',
	'سرماخوردگی‌ ـ cold common',
	'سرمازدگی‌ ـ frostbite',
	'سقط‌ ـ miscarriage',
	'سكته‌ مغزی‌ ـ stroke',
	'سكسكه‌ ـ hiccup',
	'سل‌ (توبركولوز) ـ tuberculosis',
	'سلولیت‌ ـ cellulitis',
	'سنگ‌ كلیه‌ ـ kidney stones',
	'سنگ‌ كیسه‌ صفرا ـ gallstones',
	'سوء مصرف‌ مواد و اعتیاد ـ drug abuse and addiction',
	'سوءجذب‌ ـ malabsorption',
	'سوءرفتار و خشونت‌ در منزل‌ ـ domestic violence',
	'سوءمصرف‌ و اعتیاد به‌ مواد ـ substance abuse and addiction',
	'سوءهاضمه‌ ـ indigestion',
	'سوختگی‌ها ـ burns',
	'سوزاك‌ ـ gonorrhea',
	'سوزش‌ سر دل ـ heartburn',
	'سوزش‌ سر دل‌ به‌ هنگام‌ حاملگی‌ ـ heartburn during pregnancy',
	'سوگ‌ (ماتم‌) ـ grief',
	'سیاه‌ سرفه‌ ـ whooping cough',
	'سیروز كبدی‌ ـ cirrhosis of the liver',
	'سیستیت‌ بینابینی‌ ـ interstitial cystitis',
	'سیفلیس‌ ـ syphilis',
	'سیلیكوز ـ silicosis',
	'سینوزیت‌ ـ sinus infection',
	'شالازیون‌ ـ chalazion',
	'شب‌ ادراری‌ ـ bed wetting',
	'شپش‌ (پدیدیكولوز) ـ lice',
	'شقاق‌ مقعد ـ anal fissure',
	'شكستگی‌ استخوان‌ ـ bone fracture',
	'شكستگی‌ بینی‌ ـ nose fracture',
	'شكستگی‌ سر استخوان‌ ران‌ ـ hip fracture',
	'شوك‌ ـ shock',
	'صرع‌ ـ epilepsy',
	'ضایعات‌ خوش‌خیم‌ پوست‌ ـ skin lesions benign',
	'ضربه و آسیب سر ـ head injury',
	'طاسی‌ سر طبق‌ الگوی‌ مشخص‌ ـ baldness pattern',
	'طاسی‌ منطقه‌ای‌ ـ alopecia areata',
	'عدم‌ تحمل‌ لاكتوز ـ lactose intolerance',
	'عدم‌ تعادل‌ پتاسیم‌ ـ potassium imbalance',
	'عدم‌ نزول‌ بیضه‌ ـ testes undescended',
	'عرق‌سوز (میلیاریا روبرا) ـ prickly heat',
	'عفونت‌ حاد كلیه‌ ـ kidney infection acute',
	'عفونت‌ زخم‌ جراحی‌ ـ surgical wound infection',
	'عفونت‌ سالمونلا ـ salmonella infections',
	'عفونت‌ غدد بزاقی‌ ـ salivary gland infection',
	'عفونت‌ كلامیدیایی‌ ـ chlamydia infection',
	'عفونت‌ گردن‌ رحم‌ ـ cervicitis',
	'عفونت‌ گوش‌ خارجی ـ ear infection outer',
	'عفونت‌ گوش‌ میانی‌ ـ ear infection middle',
	'عفونت‌ مثانه‌ در زنان‌ ـ bladder infection female',
	'عفونت‌ مثانه‌ در مردان‌ ـ bladder infection male',
	'عفونت‌ مزمن‌ كلیه‌ ـ kidney infection chronic',
	'عفونت‌ یا انسداد مجرای‌ اشكی‌ ـ tear duct infection or blockage',
	'عقب‌ماندگی‌ ذهنی‌ ـ mental retardation',
	'غش‌ كردن‌ (سنكوپ‌) ـ fainting',
	'فارنژیت‌ ـ pharyngitis',
	'فئوكروموسیتوم‌ ـ pheochromocytoma',
	'فتق‌ ـ hernia',
	'فتق‌ هیاتال ـ hiatal hernia',
	'فرو رفتن‌ ناخن‌ پا در گوشت‌ ـ toenail ingrown',
	'فشار خون‌ بالا ـ hypertension',
	'فلج‌ بل ـ bells palsy',
	'فلج‌ مغزی‌ ـ cerebral palsy',
	'فولیكولیت‌ باكتریایی‌ ـ folliculitis bacterial',
	'فولیكولیت‌ قارچی‌ ـ folliculitis fungal',
	'فیبروز كیستیك‌ ـ cystic fibrosis',
	'فیبروزیت‌ ـ fibrositis',
	'فیبریلاسیون‌ دهلیزی‌ ـ atrial fibrillation',
	'فیستول‌ مقعدی‌ ـ anal fistula',
	'قارچ‌ ناخن‌ ـ nails ringworm infection of',
	'قانقاریا ـ gangrene',
	'کاندیدیاز پوست ـ candidiasis of skin',
	'كاردیومیوپاتی‌ ـ cardiomyopathy',
	'كارسینوم‌ كلیه‌ ـ hypernephroma',
	'كچلی‌ تغییردهنده‌ رنگ‌ (تینا ورسیكالر) ـ tinea versicolor',
	'كچلی‌ قارچی‌ ـ ringworm',
	'كچلی‌ كشاله‌ ران‌ (تیناكروریس‌) ـ tinea cruris',
	'كراتوز اكتینیك‌ ـ keratosis actinic',
	'كراتوز سبورئیك‌ ـ keratoses seborrheic',
	'كراتوزیس‌ پیلاریس‌ ـ keratosis pilaris',
	'كرم‌ نواری‌ ـ tapeworm',
	'كرمك‌ (كرم‌ نخی‌) ـ pinworms',
	'كرم‌های‌ گرد ـ roundworms',
	'كریپتوكوكوز ـ cryptococcosis',
	'كزاز ـ tetanus',
	'كشیدگی‌ گردن‌ ـ whiplash',
	'كلویید ـ Keloids',
	'كله‌ سیستیت‌ یا كلانژیت‌ ـ cholecystitis or cholangitis',
	'كلیه‌ پلی‌كیستیك‌ ـ kidney polycystic',
	'كم‌ شدن‌ دمای‌ بدن‌ ـ hypothermia',
	'كم‌آبی‌ بدن‌ ـ dehydration',
	'كمبود روی‌ ـ zinc deficiency',
	'كم‌خونی‌ به‌ هنگام‌ بارداری‌ ـ anemia during pregnancy',
	'كم‌خونی‌ سلول‌ داسی‌شكل‌ ـ sickle cell anemia and sickle cell trait',
	'كم‌خونی‌ فقر آهن‌ ـ anemia iron deficiency',
	'كم‌خونی‌ ناشی‌ از كمبود اسیدفولیك‌ ـ anemia folic acid deficiency',
	'كم‌خونی‌ وخیم‌ ـ anemia pernicious',
	'كم‌خونی‌ هِمولیتیك‌ ـ anemia hemolytic',
	'كم‌كاری‌ پاراتیرویید ـ hypoparathyroidism',
	'كم‌كاری‌ تیرویید ـ hypothyroidism',
	'كورك‌ ـ boils',
	'كوفتگی‌ یا پارگی‌ چشم‌ ـ eye contusion or laceration',
	'كولیت‌ اولسرو ـ colitis ulcerative',
	'كولیك‌ شیرخواران‌ ـ colic in infants',
	'كهیر ـ hives',
	'كیست‌ پیلونیدال‌ ـ pilonidal cyst',
	'كیست‌ سباسه‌ (كیست‌ اپیدرمویید) ـ sebaceous cyst',
	'گاز گرفتن‌ حیوانات‌ ـ animal bites',
	'گاسترو آنتریت‌ ـ gastroenteritis',
	'گاستریت‌ (ورم‌ معده‌) ـ gastritis',
	'گرانولوم‌ چركی‌ ـ granuloma pyogenic',
	'گرانولوم‌ حلقوی‌ ـ granuloma annulare',
	'گرمازدگی‌ یا خستگی‌ گرمایی‌ ـ heatstroke or heat exhaustion',
	'گزش‌ و نیش‌ حشرات‌ ـ insect bites and stings',
	'گل‌ مژه‌ ـ stye',
	'گلودرد استرپتوكوكی‌ ـ strep throat',
	'گلومرولونفریت‌ ـ glomerulonephritis',
	'گیر كردن‌ مدفوع‌ در راست‌روده‌ ـ fecal impaction',
	'لابیرنتیت ـ labyrinthitis',
	'لارنژیت‌ ـ laryngitis',
	'لاروهای‌ مهاجر پوستی‌ ـ larva migrans cutaneous',
	'لكوپلاكی‌ ـ leukoplakia',
	'لنفوگرانولوم‌ ونروم‌ (ال‌جی‌وی‌) ـ lymphogranuloma venereum',
	'لنفوم‌ غیرهوجكین‌ ـ lymphoma non hodgkins',
	'لنگیدن‌ ـ claudication',
	'لوپوس‌ اریتماتوی‌ دیسكویید ـ lupus erythematosus discoid',
	'لوپوس‌ اریتماتوی‌ منتشر (اس‌.ال‌.ای) ـ lupus erythematosus systemic',
	'لوسمی‌ حاد ـ leukemia acute',
	'لوسمی‌ لنفوسیتی‌ مزمن‌ ـ leukemia chronic lymphocytic',
	'لیپوم‌ ـ lipomas',
	'لیكن‌ پلان‌ ـ lichen planus',
	'ماستیت‌ (عفونت‌ پستان‌) ـ mastitis',
	'مالاریا ـ malaria',
	'مخملك‌ ـ scarlet fever',
	'مسمومیت‌ حاملگی‌ (پره‌اكلامپسی‌ و اكلامپسی‌) ـ toxemia of pregnancy',
	'مسمومیت‌ خون‌ (سپتی‌سمی‌) ـ blood poisoning',
	'مسمومیت‌ غذایی‌ ـ food poisoning',
	'مشكلات‌ باروری‌ در زنان‌ ـ fertility problems in women',
	'مشكلات‌ باروری‌ در مردان‌ ـ fertility problems in men',
	'مكیدن‌ شست‌ ـ thumb sucking',
	'ملانوم‌ ـ melanoma',
	'مننژیت‌ باكتریایی‌ ـ meningitis bacterial',
	'مننژیت‌ غیرچركی‌ ـ meningitis aseptic',
	'منوراژی‌ ـ menorrhagia',
	'مولوسكوم‌ كنتاژیوزوم‌ ـ molluscum contagiosum',
	'مونونوكلئوز عفونی‌ ـ mononucleosis infectious',
	'میاستنی‌گراو ـ myasthenia gravis',
	'میخچه‌ یا پینه‌ ـ corn or callus',
	'میگرن ـ headache migraine',
	'میلوم‌ متعدد ـ multiple myeloma',
	'میوكاردیت‌ ـ myocarditis',
	'ناتوانی‌ جنسی‌ در مردان‌ ـ impotence male sexual',
	'ناخوشی‌ صبحگاهی‌ در طی‌ بارداری‌ ـ morning sickness during pregnancy',
	'ناراحتی‌ یا درد به‌ هنگام‌ بلع‌ ـ dysphagia',
	'نارسایی‌ احتقانی‌ قلب‌ ـ congestive heart failure',
	'نارسایی‌ حاد كلیه‌ ـ renal failure acute',
	'نارسایی‌ غده‌ هیپوفیز ـ pituitary gland underactive',
	'ناركولپسی‌ ـ narcolepsy',
	'ناسازگاری‌ جنین‌ ـ Rh incompatibility',
	'ناشنوایی‌ و اختلال‌ در شنوایی‌ ـ hearing impairment or loss',
	'نامنظمی‌ ضرباهنگ‌ قلب‌ (آریتمی‌) ـ heart rhythm irregularity',
	'نشانگان‌ انسداد خروجی‌ قفسه‌ سینه‌ (نشانگان‌ دنده‌ گردنی‌) ـ thoracic outlet obstruction syndrome',
	'نشانگان‌ تونل‌ مچ‌ دستی‌ ـ carpal tunnel syndrome',
	'نشانگان‌ خستگی‌ مزمن‌ ـ chronic fatigue syndrome',
	'نشانگان‌ داون‌ ـ down syndrome',
	'نشانگان‌ رای‌ ـreyes syndromse',
	'نشانگان‌ روده‌ تحریك‌پذیر ـ irritable bowel syndrome',
	'نشانگان‌ ژیلبرت‌ ـ gilberts syndrome',
	'نشانگان‌ شوك‌ سمی‌ (توكسیك‌) ـ toxic shock syndrome',
	'نشانگان‌ شوگرن‌ ـ sjogrens syndrome',
	'نشانگان‌ كارسینویید ـ carcinoid syndrome',
	'نشانگان‌ كوشینگ‌ ـ cushings syndrome',
	'نشانگان گیلن باره ـ guillain barre syndrome',
	'نشانگان‌ مارفان‌ ـ marfan syndrome',
	'نشانگان‌ مفصل‌ گیجگاهی‌ ـ فك‌تحتانی‌ ـ temporomandibular joint (tmj) syndrome',
	'نشانگان‌ نفروتیك‌ (نفروز) ـ nephrotic syndrome',
	'نشانگان‌ ورود سریع‌ غذا به‌ روده‌كوچك‌ ـ dumping syndrome',
	'نقرس‌ ـ gout',
	'نقرس‌ كاذب‌ ـ pseudogout',
	'نوروپاتی‌ محیطی‌ (نوریت‌ محیطی‌) ـ peripheral neuropathy',
	'وارد آمدن‌ صدمه‌ به‌ مثانه‌ یا پیشابراه‌ ـ bladder or urethra injury',
	'واژینیت‌ باكتریایی‌ (واژینیت‌گاردنرلایی‌؛ واژینیت‌غیراختصاصی‌) ـ vaginitis bacterial',
	'واژینیت‌ تریكومونایی‌ (تریكومونیاز) ـ vaginitis trichomonal',
	'واژینیت‌ كاندیدیانی‌ (عفونت‌ قارچی‌ مهبل‌) ـ vaginitis candidal',
	'واژینیت‌ مونیلیایی‌ (عفونت‌ قارچی‌ مهبل‌) ـ vaginitis monilial',
	'واژینیت‌ یائسگی‌ (واژینیت‌ آتروفیك‌) ـ vaginitis postmenopausal',
	'واكنش‌ پوستی‌ آلرژیك‌ به‌ عفونت‌ پوست‌ ـ reaction to infection',
	'واكنش‌ در اثر تزریق‌ خون‌ ـ blood transfusion reaction',
	'واكنش‌های‌ دارویی‌ ـ drug hypersensitivity',
	'وریدهای‌ واریسی‌ ـ varicose veins',
	'وزوز گوش‌ ـ tinnitus',
	'وقفه‌ تنفسی‌ هنگام‌ خواب‌ ـ sleep apnea',
	'وولووواژینیت‌ قبل‌ از بلوغ‌ ـ vulvovaginitis before puberty',
	'هاری‌ (آب‌ ترسی) ـ rabies',
	'هپاتوما ـ hepatoma',
	'هپاتیت‌ ویروسی‌ ـ hepatitis viral',
	'هرپانژین‌ ـ herpangina',
	'هموفیلی‌ ـ hemophilia',
	'هیپرآلدوسترونیسم‌ ـ hyperaldosteronism',
	'هیپرپلازی‌ آندومتر ـ endometrial hyperplasia',
	'هیپرلیپیدمی‌ ـ hyperlipidemia',
	'هیپوگلیسمی‌ (كاهش‌ قند خون‌) ـ diabetes hypoglycemia',
	'هیپوگلیسمی‌ عملكردی‌ ـ hypoglycemia functional',
	'هیدرآدنیت‌ چركی‌ ـ hidradenitis suppurativa',
	'هیرسوتیسم‌ ـ hirsutism',
	'هیستوپلاسموز ـ histoplasmosis',
	'یائسگی‌ ـ menopause',
	'یبوست‌ ـ constipation');

	// foreach ($illness as $key){
	// 	$insert = "INSERT INTO ".illnessDetailsTable." (title) VALUES ('".$key."')";
	// 	mysqli_query(connection(), $insert);
	// }

