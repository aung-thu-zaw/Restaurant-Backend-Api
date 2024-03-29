<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Main Courses
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'grilled-chicken-breast.jpeg',
            'name' => 'Grilled Chicken Breast',
            'ingredients' => 'Chicken breast, olive oil, garlic, lemon, herbs',
            'discount_price' => null,
            'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'pan-seared-salmon.jpeg',
            'name' => 'Pan-Seared Salmon',
            'ingredients' => 'Salmon fillet, butter, lemon, dill, salt, pepper',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'filet-mignon.jpeg',
            'name' => 'Filet Mignon',
            'ingredients' => 'Beef tenderloin, salt, black pepper, butter, thyme',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'chicken-marsala.jpeg',
            'name' => 'Chicken Marsala',
            'ingredients' => 'Chicken breast, Marsala wine, mushrooms, garlic',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'veal-parmesan.jpeg',
            'name' => 'Veal Parmesan',
            'ingredients' => 'Veal cutlet, marinara sauce, mozzarella, Parmesan, pasta',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'lemon-herb-tilapia.jpeg',
            'name' => 'Lemon Herb Tilapia',
            'ingredients' => 'Tilapia fillet, lemon, olive oil, parsley, thyme',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'beef-stroganoff.jpeg',
            'name' => 'Beef Stroganoff',
            'ingredients' => 'Beef strips, onions, mushrooms, sour cream, mustard',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'honey-glazed-ham.jpeg',
            'name' => 'Honey Glazed Ham',
            'ingredients' => 'Ham, honey, brown sugar, cloves, pineapple',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'stuffed-bell-peppers.jpeg',
            'name' => 'Stuffed Bell Peppers',
            'ingredients' => 'Bell peppers, ground beef, rice, tomatoes, cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 1,
            'image' => 'teriyaki-glazed-tofu.jpeg',
            'name' => 'Teriyaki Glazed Tofu',
            'ingredients' => 'Tofu, teriyaki sauce, sesame oil, green onions',
             'status' => 'published'
        ]);

        // Salads
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'caesar-salad.jpeg',
            'name' => 'Caesar Salad',
            'ingredients' => 'Romaine lettuce, croutons, Caesar dressing, Parmesan cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'greek-salad.jpeg',
            'name' => 'Greek Salad',
            'ingredients' => 'Cucumbers, tomatoes, olives, feta cheese, red onion',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'caprese-salad.jpeg',
            'name' => 'Caprese Salad',
            'ingredients' => 'Tomatoes, fresh mozzarella, basil, balsamic glaze',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'cobb-salad.jpeg',
            'name' => 'Cobb Salad',
            'ingredients' => 'Lettuce, chicken breast, bacon, avocado, blue cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'spinach-and-strawberry-salad.jpeg',
            'name' => 'Spinach and Strawberry Salad',
            'ingredients' => 'Baby spinach, strawberries, almonds, feta, balsamic vinaigrette',
            'discount_price' => null,
             'status' => 'published'
        ]);

        Product::factory()->create([
            'category_id' => 2,
            'image' => 'asian-chicken-salad.jpeg',
            'name' => 'Asian Chicken Salad',
            'ingredients' => 'Mixed greens, grilled chicken, mandarin oranges, sesame dressing',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'mediterranean-quinoa-salad.jpeg',
            'name' => 'Mediterranean Quinoa Salad',
            'ingredients' => 'Quinoa, cherry tomatoes, cucumbers, Kalamata olives, feta',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'tuna-nicoise-salad.webp',
            'name' => 'Tuna Nicoise Salad',
            'ingredients' => 'Tuna, potatoes, green beans, boiled eggs, olives',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'waldorf-salad.jpeg',
            'name' => 'Waldorf Salad',
            'ingredients' => 'Apples, celery, grapes, walnuts, mayonnaise',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 2,
            'image' => 'southwest-chicken-salad.webp',
            'name' => 'Southwest Chicken Salad',
            'ingredients' => 'Grilled chicken, black beans, corn, avocado, cilantro lime dressing',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Seafood
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'grilled-salmon.jpeg',
            'name' => 'Grilled Salmon',
            'ingredients' => 'Salmon fillet, lemon, herbs, olive oil',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'shrimp-scampi.jpeg',
            'name' => 'Shrimp Scampi',
            'ingredients' => 'Shrimp, garlic, white wine, lemon, parsley',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'lobster-tail.jpeg',
            'name' => 'Lobster Tail',
            'ingredients' => 'Lobster tail, butter, garlic, lemon, parsley',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'clam-linguine.jpeg',
            'name' => 'Clam Linguine',
            'ingredients' => 'Clams, linguine, garlic, white wine, parsley',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'miso-glazed-cod.jpeg',
            'name' => 'Miso Glazed Cod',
            'ingredients' => 'Cod fillet, miso paste, soy sauce, ginger, mirin',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'cioppino.webp',
            'name' => 'Cioppino',
            'ingredients' => 'Assorted seafood (shrimp, mussels, clams), tomatoes, broth',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'crab-cakes.jpeg',
            'name' => 'Crab Cakes',
            'ingredients' => 'Crab meat, breadcrumbs, mayonnaise, mustard, Old Bay seasoning',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'scallop-risotto.jpeg',
            'name' => 'Scallop Risotto',
            'ingredients' => 'Scallops, Arborio rice, white wine, Parmesan, shallots',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'tuna-poke-bowl.jpeg',
            'name' => 'Tuna Poke Bowl',
            'ingredients' => 'Ahi tuna, soy sauce, sesame oil, avocado, rice',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 3,
            'image' => 'grilled-swordfish.jpeg',
            'name' => 'Grilled Swordfish',
            'ingredients' => 'Swordfish steak, lemon, garlic, herbs',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Desserts
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'chocolate-lava-cake.jpeg',
            'name' => 'Chocolate Lava Cake',
            'ingredients' => 'Chocolate, butter, eggs, sugar, flour',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'new-york-cheesecake.jpeg',
            'name' => 'New York Cheesecake',
            'ingredients' => 'Cream cheese, sugar, eggs, sour cream, vanilla extract',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'tiramisu.jpeg',
            'name' => 'Tiramisu',
            'ingredients' => 'Ladyfingers, mascarpone cheese, coffee, cocoa powder',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'strawberry-shortcake.jpeg',
            'name' => 'Strawberry Shortcake',
            'ingredients' => 'Sponge cake, strawberries, whipped cream',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'molten-caramel-brownie.jpeg',
            'name' => 'Molten Caramel Brownies',
            'ingredients' => 'Brownie mix, caramel sauce, pecans, chocolate chips',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'panna-cotta.jpeg',
            'name' => 'Panna Cotta',
            'ingredients' => 'Heavy cream, sugar, gelatin, vanilla bean',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'apple-pie.jpeg',
            'name' => 'Apple Pie',
            'ingredients' => 'Apples, sugar, cinnamon, pie crust',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'chocolate-mousse.jpeg',
            'name' => 'Chocolate Mousse',
            'ingredients' => 'Chocolate, heavy cream, eggs, sugar',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'red-velvet-cupcakes.jpeg',
            'name' => 'Red Velvet Cupcakes',
            'ingredients' => 'Red velvet cake mix, cream cheese frosting',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 4,
            'image' => 'fruit-sorbet.jpeg',
            'name' => 'Fruit Sorbet',
            'ingredients' => 'Assorted fruits, sugar, lemon juice',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Breakfast
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'classic-pancakes.webp',
            'name' => 'Classic Pancakes',
            'ingredients' => 'Flour, milk, eggs, baking powder, butter',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'french-toast.jpeg',
            'name' => 'French Toast',
            'ingredients' => 'Bread, eggs, milk, cinnamon, vanilla extract',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'vegetarian-omelette.jpeg',
            'name' => 'Vegetarian Omelette',
            'ingredients' => 'Eggs, bell peppers, onions, tomatoes, cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'avocado-toast.jpeg',
            'name' => 'Avocado Toast',
            'ingredients' => 'Whole wheat bread, avocado, cherry tomatoes, olive oil',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'eggs-benedict.jpeg',
            'name' => 'Eggs Benedict',
            'ingredients' => 'English muffin, poached eggs, Canadian bacon, hollandaise sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'greek-yogurt-parfait.jpeg',
            'name' => 'Greek Yogurt Parfait',
            'ingredients' => 'Greek yogurt, granola, mixed berries, honey',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'breakfast-burrito.jpeg',
            'name' => 'Breakfast Burrito',
            'ingredients' => 'Tortilla, scrambled eggs, black beans, salsa, cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'blueberry-muffins.jpeg',
            'name' => 'Blueberry Muffins',
            'ingredients' => 'Flour, sugar, blueberries, milk, butter',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 5,
            'image' => 'smoked-salmon-bagel.jpeg',
            'name' => 'Smoked Salmon Bagel',
            'ingredients' => 'Bagel, smoked salmon, cream cheese, capers, red onion',
            'discount_price' => null,
             'status' => 'published'
        ]);

        Product::factory()->create([
            'category_id' => 5,
            'image' => 'acai-bowl.jpeg',
            'name' => 'Acai Bowl',
            'ingredients' => 'Acai berries, banana, granola, coconut flakes',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Kids Menu
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'cheesy-macaroni-and-cheese.webp',
            'name' => 'Cheesy Macaroni and Cheese',
            'ingredients' => 'Macaroni pasta, cheddar cheese sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'mini-cheese-pizza.jpeg',
            'name' => 'Mini Cheese Pizza',
            'ingredients' => 'Mini pizza crust, tomato sauce, mozzarella cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'chicken-nuggets.jpeg',
            'name' => 'Chicken Nuggets',
            'ingredients' => 'Chicken breast nuggets, breadcrumbs, ketchup',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'peanut-butter-and-jelly-sandwich.jpeg',
            'name' => 'Peanut Butter and Jelly Sandwich',
            'ingredients' => 'Bread, peanut butter, jelly',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'grilled-cheese-sandwich.jpeg',
            'name' => 'Grilled Cheese Sandwich',
            'ingredients' => 'Bread, cheddar cheese, butter',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'mini-corn-dogs.jpeg',
            'name' => 'Mini Corn Dogs',
            'ingredients' => 'Mini hot dogs, cornmeal batter, ketchup',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'fish-sticks.jpeg',
            'name' => 'Fish Sticks',
            'ingredients' => 'Breaded fish fillets, tartar sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'vegetable-quesadilla.jpeg',
            'name' => 'Vegetable Quesadilla',
            'ingredients' => 'Flour tortilla, cheese, mixed vegetables',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'dinosaur-shaped-chicken-tenders.jpeg',
            'name' => 'Dinosaur-Shaped Chicken Tenders',
            'ingredients' => 'Chicken tenders, breadcrumbs, barbecue sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 6,
            'image' => 'fruit-kabobs.jpeg',
            'name' => 'Fruit Kabobs',
            'ingredients' => 'Assorted fruits on skewers',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Burgers
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'classic-cheeseburger.jpeg',
            'name' => 'Classic Cheeseburger',
            'ingredients' => 'Beef patty, cheese, lettuce, tomato, onion, ketchup, mustard',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'bacon-bbq-burger.webp',
            'name' => 'Bacon BBQ Burger',
            'ingredients' => 'Beef patty, bacon, cheddar cheese, BBQ sauce, lettuce, onion',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'veggie-burger.jpeg',
            'name' => 'Veggie Burger',
            'ingredients' => 'Vegetarian patty, lettuce, tomato, onion, pickles, mayo',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'mushroom-swiss-burger.jpeg',
            'name' => 'Mushroom Swiss Burger',
            'ingredients' => 'Beef patty, Swiss cheese, sautéed mushrooms, lettuce, mayo',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'double-bacon-cheeseburger.jpeg',
            'name' => 'Double Bacon Cheeseburger',
            'ingredients' => 'Two beef patties, bacon, American cheese, lettuce, tomato',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'spicy-jalapeño-burger.jpeg',
            'name' => 'Spicy Jalapeño Burger',
            'ingredients' => 'Beef patty, pepper jack cheese, jalapeños, lettuce, chipotle mayo',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'avocado-turkey-burger.jpeg',
            'name' => 'Avocado Turkey Burger',
            'ingredients' => 'Turkey patty, avocado, Swiss cheese, lettuce, tomato, cranberry sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'blue-cheese-buffalo-burger.jpeg',
            'name' => 'Blue Cheese Buffalo Burger',
            'ingredients' => 'Buffalo burger, blue cheese, lettuce, tomato, buffalo sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'teriyaki-pineapple-burger.jpeg',
            'name' => 'Teriyaki Pineapple Burger',
            'ingredients' => 'Beef patty, teriyaki glaze, grilled pineapple, lettuce, onion',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 7,
            'image' => 'beyond-meat-burger.jpeg',
            'name' => 'Beyond Meat Burger',
            'ingredients' => 'Beyond Meat patty, vegan cheese, lettuce, tomato, vegan mayo',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Pasta
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'spaghetti-bolognese.jpeg',
            'name' => 'Spaghetti Bolognese',
            'ingredients' => 'Ground beef, tomatoes, onions, garlic, Italian herbs, spaghetti',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'fettuccine-alfredo.jpeg',
            'name' => 'Fettuccine Alfredo',
            'ingredients' => 'Fettuccine pasta, heavy cream, butter, Parmesan cheese',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'chicken-pesto-pasta.webp',
            'name' => 'Chicken Pesto Pasta',
            'ingredients' => 'Chicken breast, penne pasta, basil pesto, cherry tomatoes',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'lobster-ravioli.jpeg',
            'name' => 'Lobster Ravioli',
            'ingredients' => 'Lobster-filled ravioli, tomato cream sauce, basil',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'vegetarian-lasagna.jpeg',
            'name' => 'Vegetarian Lasagna',
            'ingredients' => 'Lasagna noodles, ricotta cheese, spinach, marinara sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'carbonara.jpeg',
            'name' => 'Carbonara',
            'ingredients' => 'Spaghetti, pancetta, eggs, Parmesan cheese, black pepper',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'shrimp-scampi-linguine.jpeg',
            'name' => 'Shrimp Scampi Linguine',
            'ingredients' => 'Shrimp, linguine pasta, garlic, white wine, lemon',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'penne-alla-vodka.jpeg',
            'name' => 'Penne alla Vodka',
            'ingredients' => 'Penne pasta, vodka sauce, crushed red pepper, Parmesan',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'mushroom-risotto.jpeg',
            'name' => 'Mushroom Risotto',
            'ingredients' => 'Arborio rice, mushrooms, onions, vegetable broth, Parmesan',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 8,
            'image' => 'eggplant-parmesan.jpeg',
            'name' => 'Eggplant Parmesan',
            'ingredients' => 'Eggplant slices, marinara sauce, mozzarella, Parmesan',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Vegetarian
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'vegetable-stir-fry.jpeg',
            'name' => 'Vegetable Stir-Fry',
            'ingredients' => 'Assorted vegetables, tofu, soy sauce, ginger, garlic',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'quinoa-salad-bowl.jpeg',
            'name' => 'Quinoa Salad Bowl',
            'ingredients' => 'Quinoa, mixed greens, cherry tomatoes, cucumber, feta',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'eggplant-and-chickpea-curry.jpeg',
            'name' => 'Eggplant and Chickpea Curry',
            'ingredients' => 'Eggplant, chickpeas, tomatoes, coconut milk, curry spices',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'mushroom-and-spinach-lasagna.jpeg',
            'name' => 'Mushroom and Spinach Lasagna',
            'ingredients' => 'Lasagna noodles, mushrooms, spinach, ricotta cheese, marinara sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'caprese-stuffed-portobello-mushrooms.jpeg',
            'name' => 'Caprese Stuffed Portobello Mushrooms',
            'ingredients' => 'Portobello mushrooms, tomatoes, mozzarella, basil, balsamic glaze',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'vegetarian-burrito.jpeg',
            'name' => 'Vegetarian Burrito',
            'ingredients' => 'Black beans, rice, bell peppers, onions, guacamole, salsa',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'spinach-and-ricotta-stuffed-shells.jpeg',
            'name' => 'Spinach and Ricotta Stuffed Shells',
            'ingredients' => 'Jumbo pasta shells, spinach, ricotta cheese, marinara sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'sweet-potato-and-black-bean-enchiladas.jpeg',
            'name' => 'Sweet Potato and Black Bean Enchiladas',
            'ingredients' => 'Sweet potatoes, black beans, corn tortillas, enchilada sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'chickpea-and-vegetable-curry.jpeg',
            'name' => 'Chickpea and Vegetable Curry',
            'ingredients' => 'Chickpeas, mixed vegetables, coconut milk, curry spices',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 9,
            'image' => 'vegetarian-sushi-roll.jpeg',
            'name' => 'Vegetarian Sushi Roll',
            'ingredients' => 'Sushi rice, avocado, cucumber, carrots, nori, soy sauce',
            'discount_price' => null,
             'status' => 'published'
        ]);

        // Drinks
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'classic-lemonade.jpeg',
            'name' => 'Classic Lemonade',
            'ingredients' => 'Freshly squeezed lemons, sugar, water, ice',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'iced-coffee.jpeg',
            'name' => 'Iced Coffee',
            'ingredients' => 'Cold brew coffee, milk, sugar, ice',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'strawberry-smoothie.jpeg',
            'name' => 'Strawberry Smoothie',
            'ingredients' => 'Strawberries, yogurt, banana, honey, ice',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'mango-tango-mocktail.jpeg',
            'name' => 'Mango Tango Mocktail',
            'ingredients' => 'Mango juice, orange juice, pineapple juice, soda, ice',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'peach-iced-tea.jpeg',
            'name' => 'Peach Iced Tea',
            'ingredients' => 'Peach tea, sugar, lemon, ice',
            'discount_price' => null,
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'cucumber-mint-cooler.jpeg',
            'name' => 'Cucumber Mint Cooler',
            'ingredients' => 'Cucumber, mint leaves, lime juice, simple syrup, soda, ice',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'watermelon-slush.jpeg',
            'name' => 'Watermelon Slush',
            'ingredients' => 'Fresh watermelon, lime, sugar, ice',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'coconut-pineapple-smoothie.jpeg',
            'name' => 'Coconut Pineapple Smoothie',
            'ingredients' => 'Coconut milk, pineapple, banana, ice',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'blueberry-lemonade.jpeg',
            'name' => 'Blueberry Lemonade',
            'ingredients' => 'Blueberries, freshly squeezed lemons, sugar, water, ice',
             'status' => 'published'
        ]);
        Product::factory()->create([
            'category_id' => 10,
            'image' => 'espresso-martini.jpeg',
            'name' => 'Espresso Martini',
            'ingredients' => 'Espresso, vodka, coffee liqueur, simple syrup, ice',
            'discount_price' => null,
             'status' => 'published'
        ]);
    }
}
