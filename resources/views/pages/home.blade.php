@extends('template.layout')

@section('title')
    Home
@endsection

@section('content')
    <section class="w-[85%] h-screen mx-auto flex items-center">
        <div class="flex">
            <div class="w-1/2 animate-right">
                <h1 class="text-title text-mid font-bold">Reduce Organic Food Waste using<br>ECO ENZYME</h1>
                <p class="my-5 text-heading text-dark font-medium">Introducing a game-changing solution to combat organic food waste and promote sustainable living. <span class="text-title text-mid font-bold">ECO ENZYME</span> is your ultimate ally in the fight against food waste. With its powerful enzymatic properties, ECO ENZYME effortlessly breaks down organic matter, transforming kitchen scraps into a valuable resource. Say goodbye to landfill-bound waste and embrace a greener lifestyle. Learn more through <span class="text-title text-mid font-bold">EcoLab</span>!</p>
                <a href="#introduction" class="scroll-link px-5 py-1 text-subheading text-white bg-mid font-medium rounded border-2 border-mid hover:shadow-md hover:shadow-mid/25 transition duration-200">
                    Get Started >>
                </a>
            </div>
            <img src="{{ Storage::url('assets/home/waste-management.png') }}" class="w-1/2 mt-14 animate-left" alt="">
        </div>
    </section>

    <section id="introduction" class="w-[85%] h-max mx-auto flex flex-col gap-5">
        <h1 class="text-title text-mid font-bold">What is Eco-Enzyme?</h1>
        <div class="flex justify-between h-full">
            <img src="{{ Storage::url('assets/home/eco-enzyme.jpg') }}" class="w-[47.5%] rounded" alt="eco-enzyme image">
            <div class="w-[47.5%] h-max flex flex-col gap-10">
                <img src="{{ Storage::url('assets/home/fruit-waste.png') }}" class="w-full h-1/2 rounded" alt="fruit waste image">
                <p class="text-subheading text-dark font-medium">
                    Eco-enzyme is a revolutionary and natural solution for the food waste problem that embodies the power of beneficial enzymes. Eco-enzyme is a liquid produced from the fermentation of organic kitchen waste, including fruit peels and vegetable scraps, combine with sugar and water with 3:1:10 ratio.  By understanding the knowledge behind Eco-Enzyme, we unlock the potential to transform waste into valuable resources, paving the way for a greener and more sustainable future.
                </p>
            </div>
        </div>
    </section>

    <section class="w-screen h-max mt-20 bg-gradient-to-t from-mid/[0.3] via-mid/[0.23] to-mid/[0.15] py-20">
        <div class="w-[85%] mx-auto flex flex-col gap-5">
            <h1 class="text-title text-mid font-bold">How to Produce Eco-Enzyme</h1>
            <div class="flex justify-between h-max">
                <img src="{{ Storage::url('assets/home/tutorial-img.jpeg') }}" class="w-[47.5%] rounded border border-mid border-opacity-50 shadow-md" alt="eco-enzyme image">
                <div class="w-[47.5%] flex flex-col gap-5">
                    <div class="flex justify-between">
                        <div class="w-10 h-10 rounded-full bg-mid flex items-center justify-center">
                            <p class="text-heading text-white font-bold">
                                1
                            </p>
                        </div>
                        <p class="w-[90%] text-subheading text-dark font-medium">In a container, mix the organic kitchen waste, water, and sugar with 3:10:1 ratio until well combined. You can use tap water, well water, air conditioning waste water, or mineral water. For the sugar source, you can use brown sugar, coconut sugar, or molasses.</p>
                    </div>
    
                    <div class="flex justify-between">
                        <div class="w-10 h-10 rounded-full bg-mid flex items-center justify-center">
                            <p class="text-heading text-white font-bold">
                                2
                            </p>
                        </div>
                        <p class="w-[90%] text-subheading text-dark font-medium">Let the mixture be fermented for a minimum of 3 months. In the first month, alcohol will be produced. In the second month, vinegar will be produced. Finally, in the third month, the enzyme wil be produced.</p>
                    </div>
    
                    <div class="flex justify-between">
                        <div class="w-10 h-10 rounded-full bg-mid flex items-center justify-center">
                            <p class="text-heading text-white font-bold">
                                3
                            </p>
                        </div>
                        <p class="w-[90%] text-subheading text-dark font-medium">After 3 months, the eco-enzyme can be harvested by filtering the fermented mixture. The residue . from the filtering process can be used to make eco-enzyme-based compose.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-[85%] h-max mt-20 mx-auto flex flex-col gap-5">
        <h1 class="text-title text-mid font-bold">Eco-Enzyme Applications</h1>
        <div class="flex justify-between h-max">
            <div class="w-[30%] shadow-md bg-mid bg-opacity-25">
                <img src="{{ Storage::url('assets/home/applications/fertilizer.png') }}" class="rounded-t w-full" alt="fertilizer image">
                <div class="flex flex-col gap-2 p-5 rounded-b">
                    <h1 class="h-16 text-heading text-dark font-semibold">Eco-Enzyme as Fertilizer</h1>
                    <p class="h-[270px] text-subheading text-dark font-medium">
                        Chemical fertilizers can cause soil pollution that is a critical issue. Eco-enzyme contains fermented organic matter that can replace the chemical substances in the fertilizer. It can boost soil and plant productivity without any negative side effects.
                    </p>
                </div>
            </div>
            <div class="w-[30%] shadow-md">
                <img src="{{ Storage::url('assets/home/applications/disinfectant.png') }}" class="rounded-t w-full" alt="fertilizer image">
                <div class="flex flex-col gap-2 p-5 bg-mid bg-opacity-25 rounded-b h-fit">
                    <h1 class="h-16 text-heading text-dark font-semibold">Eco-Enzyme as Disinfectant</h1>
                    <p class="h-[270px] text-subheading text-dark font-medium">
                        Chemical disinfectants often contain hazardous materials which can be dangerous for the skin. Eco-enzyme has a potential to replace the harmful chemical substances and used as a component in natural disinfectant. Experiment show that eco-enzyme-based disinfectants have a significant bacteria killing power up to 99.97%.
                    </p>
                </div>
            </div>
            <div class="w-[30%] shadow-md">
                <img src="{{ Storage::url('assets/home/applications/waste-water.png') }}" class="rounded-t w-full" alt="fertilizer image">
                <div class="flex flex-col gap-2 p-5 bg-mid bg-opacity-25 rounded-b h-max">
                    <h1 class="h-16 text-heading text-dark font-semibold">Eco-Enzyme in Wastewater Treatment</h1>
                    <p class="h-[270px] text-subheading text-dark font-medium">
                        Chemical fertilizers can cause soil pollution that is a critical issue. Eco-enzyme contains fermented organic matter that can replace the chemical substances in the fertilizer. It can boost soil and plant productivity without any negative side effects.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            $('.scroll-link').on('click', function(event) {
            event.preventDefault();
            var target = $(this).attr('href');
            $('html, body').animate({ scrollTop: $(target).offset().top }, 'slow');
            });
        });
    </script>
@endsection