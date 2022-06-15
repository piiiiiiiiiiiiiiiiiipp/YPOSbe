@extends('forum.struct')

@section('content')
<main id="tt-pageContent">
        <div class="containerskiy">
            <main class="tt-single-topic-list">
                <main id="tt-pageContent">
                    <div class="tt-custom-mobile-indent containerskiy">
                        <div class="tt-categories-title">
                            <div class="tt-title">Categories</div>
                        </div>
                        <div class="tt-categories-list">
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.dep')}}"><span
                                                            class="tt-color01 tt-badge">depression</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="innerwrapper">
                                                Depression is a mood disorder that causes a persistent feeling of
                                                sadness and loss of interest. Also called major depressive disorder or
                                                clinical depression, it affects how you feel, Sthink and behave and can
                                                lead to a variety of emotional and physical problems. Depression can
                                                affect anyone—even a person who appears to live in relatively ideal
                                                circumstances. Depression is among the most treatable of mental
                                                disorders.
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.harass')}}"><span
                                                            class="tt-color02 tt-badge">harassment</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Harassment is when the speech or actions are so severe, pervasive, or
                                                targeted at particular people that it hinders the student's ability to
                                                get an education, significantly harms their well-being, substantially
                                                interferes with their rights, or intimidates the student because of
                                                their identity. Gender-based violence and harassment are behaviors that
                                                are committed because of a person’s gender or sex and can happen to
                                                anyone.
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.bul')}}"><span
                                                            class="tt-color03 tt-badge">bullying</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Bullying is when a student causes another student to feel less safe,
                                                fearful, or like they are unable to participate in school.i Bullying,
                                                often involves an imbalance of power, and can include physical, verbal,
                                                or psychological actions against a student. The behavior is repeated, or
                                                has the potential to be repeated, over time. Bullying can also happen
                                                through communications, including social media.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.abuse')}}"><span
                                                            class="tt-color15 tt-badge">abuse</span></a></li>
                                            </ul>

                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Abuse is when someone causes us harm or distress. It can take many
                                                forms, ranging from disrespect to causing someone physical or mental
                                                pain. It can occur in someone’s home, a care home, hospital or a public
                                                place. Often the people who commit abuse are taking advantage of a
                                                special relationship. They may be a family member, friend or paid carer
                                                who we expect to trust.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.anxiety')}}"><span
                                                            class="tt-color07 tt-badge">anxiety</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Anxiety is your body’s natural response to stress. It’s a feeling of
                                                fear or apprehension about what’s to come. The first day of school,
                                                going to a job interview, or giving a speech may cause most people to
                                                feel fearful and nervous. But if your feelings of anxiety are extreme,
                                                last for longer than six months, and are interfering with your life, you
                                                may have an anxiety disorder.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.eat')}}"><span
                                                            class="tt-color08 tt-badge">eating disorders</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                There is a commonly held misconception that eating disorders are a
                                                lifestyle choice. Eating disorders are actually serious and often fatal
                                                illnesses that are associated with severe disturbances in people’s
                                                eating behaviors and related thoughts and emotions. Preoccupation with
                                                food, body weight, and shape may also signal an eating disorder. Common
                                                eating disorders include anorexia nervosa, bulimia nervosa.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.stress')}}"><span
                                                            class="tt-color09 tt-badge">stress</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Stress can be defined as any type of change that causes physical,
                                                emotional, or psychological strain. Stress is your body's response to
                                                anything that requires attention or action. Everyone experiences stress
                                                to some degree. The way you respond to stress, however, makes a big
                                                difference to your overall well-being.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.suicide')}}"><span
                                                            class="tt-color10 tt-badge">suicidal thoughts</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                Suicidal thoughts, or suicide ideation, refers to thinking about or
                                                planning suicide. Thoughts can range from creating a detailed plan to
                                                having a fleeting consideration. It does not include the final act of
                                                suicide. Many people experience suicidal thoughts, especially during
                                                times of stress or when they are facing mental or physical health
                                                challenges.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="tt-item">
                                        <div class="tt-item-header">
                                            <ul class="tt-list-badge">
                                                <li><a href="{{route('cat.dr')}}"><span
                                                            class="tt-color11 tt-badge">drinking and smoking</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tt-item-layout">
                                            <div class="tt-innerwrapper">
                                                If you have more than five drinks a week, you’re two-and-half times more
                                                likely to smoke. Compared to nonsmokers, smokers are three times more
                                                likely to drink to excess. Moderate drinkers who smoke have a higher
                                                risk of heart, liver, and lung disease than those who only smoke or only
                                                drink. Nicotine creates an immediate sense of relaxation,but soon gives
                                                way to withdrawal symptoms and increased cravings.
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </main>
        </div>

@endsection
