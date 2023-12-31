<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FAQCategory;
use App\Models\FAQItem;

class FAQItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vehicle Identification
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Vehicle Identification')->first()->id,
            'question' => 'How do I decode my vehicle\'s VIN to get detailed information?',
            'answer' => 'To decode your vehicle\'s VIN, consult online VIN decoders, which provide information about the manufacturer, model year, assembly plant, and other details.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Vehicle Identification')->first()->id,
            'question' => 'Where can I find the engine number on my car?',
            'answer' => 'The engine number is usually located on the engine block. Refer to your vehicle\'s manual for the exact location, as it may vary between makes and models.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Vehicle Identification')->first()->id,
            'question' => 'What is the significance of the vehicle color code?',
            'answer' => 'The vehicle color code, often found on the VIN plate, indicates the exact color of your vehicle. It helps in obtaining the correct touch-up paint.'
        ]);

        // Spotting Locations
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Spotting Locations')->first()->id,
            'question' => 'Are there specific spots where rare classic cars are commonly spotted?',
            'answer' => 'Yes, historic districts, vintage car shows, and auctions are prime locations for spotting rare classic cars, offering a blend of history and rarity.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Spotting Locations')->first()->id,
            'question' => 'What time of day is best for car spotting?',
            'answer' => 'The golden hours of sunrise and sunset provide ideal lighting conditions for car spotting, enhancing the visual appeal of the vehicles.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Spotting Locations')->first()->id,
            'question' => 'Are there car spotting events organized specifically for enthusiasts?',
            'answer' => 'Yes, many car enthusiasts organize meet-ups and events, creating opportunities to spot unique vehicles and connect with fellow enthusiasts.'
        ]);

        // Photography Tips
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Photography Tips')->first()->id,
            'question' => 'How can I achieve a blurred background effect in car photos?',
            'answer' => 'Use a wide aperture (low f-stop), focus on the car, and maintain some distance between the car and the background to achieve a beautiful blurred background (bokeh).'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Photography Tips')->first()->id,
            'question' => 'What is the best camera lens for capturing car details?',
            'answer' => 'A macro lens is ideal for capturing intricate car details. It allows for close-up shots with sharp focus, highlighting the fine details of the vehicle.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Photography Tips')->first()->id,
            'question' => 'How can I avoid glare and reflections when photographing cars?',
            'answer' => 'Use a polarizing filter to reduce glare, shoot at angles that minimize reflections, and choose the right time of day to control the direction of sunlight.'
        ]);

        // Event Participation
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Event Participation')->first()->id,
            'question' => 'What preparations should I make before attending a car show?',
            'answer' => 'Before attending a car show, research the event schedule, charge your camera or phone, bring comfortable footwear, and check for any specific entry requirements.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Event Participation')->first()->id,
            'question' => 'Can I participate in a car show if I don\'t own a classic or exotic car?',
            'answer' => 'Yes, many car shows have categories for different types of vehicles, including everyday cars. Check the shows rules and categories for eligibility.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Event Participation')->first()->id,
            'question' => 'How can I volunteer or contribute to organizing a car event?',
            'answer' => 'Contact the event organizers, express your interest in volunteering, and inquire about any specific roles or tasks they may need assistance with.'
        ]);

        // Membership
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Membership')->first()->id,
            'question' => 'Are there membership fees for joining a car enthusiasts club?',
            'answer' => 'Membership fees vary among clubs. Some are free, while others may have annual dues. Check with the specific club for details on membership costs.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Membership')->first()->id,
            'question' => 'What benefits do I get as a club member?',
            'answer' => 'Club membership benefits often include access to exclusive events, discounts on merchandise, networking opportunities, and a sense of community with fellow enthusiasts.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Membership')->first()->id,
            'question' => 'Can I join multiple car enthusiasts clubs?',
            'answer' => 'Yes, you can join multiple car enthusiasts clubs to broaden your network, attend diverse events, and engage with different communities within the automotive world.'
        ]);

        // Car Spotting Etiquette
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Car Spotting Etiquette')->first()->id,
            'question' => 'Is it appropriate to approach car owners during car spotting?',
            'answer' => 'Approaching car owners is generally acceptable, but do so respectfully. Ask for permission before taking photos, and engage in conversation without disrupting their experience.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Car Spotting Etiquette')->first()->id,
            'question' => 'Should I share the location of rare cars I spot online?',
            'answer' => 'Consider the privacy of car owners and the security of the vehicles. It\'s best to avoid sharing specific locations, especially for rare or valuable cars.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Car Spotting Etiquette')->first()->id,
            'question' => 'What should I do if a car owner asks me not to take photos of their vehicle?',
            'answer' => 'Respect their wishes and refrain from taking photos. Car owners may have personal reasons for not wanting their vehicles photographed.'
        ]);

        // Spotting Challenges
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Spotting Challenges')->first()->id,
            'question' => 'How do online spotting challenges work?',
            'answer' => 'Online spotting challenges typically involve spotting specific car models or meeting certain criteria. Participants submit their entries, and winners may receive recognition or prizes.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Spotting Challenges')->first()->id,
            'question' => 'Can I create my own car spotting challenge on social media?',
            'answer' => 'Yes, you can create your own car spotting challenge by defining the rules, establishing a hashtag, and encouraging participants to share their spotting achievements.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Spotting Challenges')->first()->id,
            'question' => 'Are there age restrictions for participating in spotting challenges?',
            'answer' => 'Most spotting challenges are open to participants of all ages. However, some challenges may have specific age categories or themes.'
        ]);

        // Featured Cars
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Featured Cars')->first()->id,
            'question' => 'How are cars selected to be featured in online communities?',
            'answer' => 'Cars are often selected based on uniqueness, visual appeal, and community engagement. Active participation, high-quality photos, and interesting stories can increase the chances of featuring.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Featured Cars')->first()->id,
            'question' => 'Can I nominate a car, including my own, to be featured?',
            'answer' => 'Yes, many communities welcome nominations. Follow the community guidelines for nominations and provide compelling reasons why the car deserves to be featured.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Featured Cars')->first()->id,
            'question' => 'How often are featured cars updated in enthusiasts communities?',
            'answer' => 'The frequency of updates varies by community. Some update weekly, while others may feature cars monthly. Check the community guidelines or announcements for specific details.'
        ]);

        // Social Media Sharing
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Social Media Sharing')->first()->id,
            'question' => 'What are the best platforms for sharing car photos on social media?',
            'answer' => 'Popular platforms for sharing car photos include Instagram, Twitter, and Facebook groups dedicated to automotive enthusiasts. Use hashtags relevant to the automotive community.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Social Media Sharing')->first()->id,
            'question' => 'Should I watermark my car photos before sharing them online?',
            'answer' => 'Watermarking is optional. While it can protect your photos, it may affect their aesthetics. Consider the platforms privacy settings and your preferences when deciding whether to watermark.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Social Media Sharing')->first()->id,
            'question' => 'How can I engage with the car enthusiast community on social media?',
            'answer' => 'Engage by commenting on posts, participating in discussions, and sharing your own content. Use social media to connect with like-minded individuals and appreciate their contributions.'
        ]);

        // Technical Issues
        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Technical Issues')->first()->id,
            'question' => 'What should I do if my check engine light comes on?',
            'answer' => 'If the check engine light comes on, it indicates a potential issue. Consult your vehicles manual for guidance, and consider visiting a mechanic for a diagnostic check.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Technical Issues')->first()->id,
            'question' => 'How often should I change my vehicle\'s oil?',
            'answer' => 'The frequency of oil changes depends on your vehicle and the type of oil used. Check your vehicles manual for recommended intervals, typically every 3,000 to 7,500 miles.'
        ]);

        FAQItem::create([
            'faq_category_id' => FAQCategory::where('name', 'Technical Issues')->first()->id,
            'question' => 'Can I use regular fuel instead of premium if my car recommends premium?',
            'answer' => 'Using regular fuel may affect performance, but it is generally acceptable for short periods. Consult your vehicles manual and consider long-term effects before deviating from the recommended fuel type.'
        ]);


    }
}
