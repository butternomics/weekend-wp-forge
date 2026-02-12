<?php
/**
 * Template part for displaying the FAQ section
 *
 * @package 404DayWeekend
 */
?>

<section id="faq" class="section section-muted">
    <div class="container" style="max-width: 64rem;">
        <h2 style="font-size: clamp(2.25rem, 5vw, 3rem); text-align: center; margin-bottom: 3rem;">
            <?php esc_html_e('Parade Info & FAQ', '404-day-weekend'); ?>
        </h2>

        <div style="background-color: white; padding: 3rem; box-shadow: 0 20px 25px rgba(0, 0, 0, 0.15);">
            <?php
            $faqs = array(
                array(
                    'question' => 'What is the 404 Day Parade?',
                    'answer' => 'The 404 Day Parade is an annual celebration dedicated to showcasing Atlanta\'s vibrant culture, diversity, and creativity. This family-friendly event features a stunning array of floats, walking groups, music, dance, and community spirit as participants march through the heart of the city.',
                ),
                array(
                    'question' => 'When and where will the parade take place?',
                    'answer' => 'The parade will take place on Saturday, April 4, 2026, in Downtown Atlanta. The route will begin at Ralph McGill Ave & Cortland St. and end at the intersection of Pryor St and MLK near Underground Atlanta.',
                ),
                array(
                    'question' => 'Is there an entry fee to attend?',
                    'answer' => 'No, the 404 Day Parade is FREE and open to the public.',
                ),
                array(
                    'question' => 'How can I participate?',
                    'answer' => 'Individuals, businesses, and organizations can apply to participate as float entries, performers, or volunteers. Applications can be submitted through our official website.',
                ),
            );

            foreach ($faqs as $index => $faq) :
            ?>
                <div style="border-bottom: 1px solid var(--color-border); padding: 1.5rem 0;">
                    <details style="cursor: pointer;">
                        <summary style="font-size: 1.25rem; font-weight: 700; color: var(--color-primary); text-transform: uppercase; list-style: none; cursor: pointer; display: flex; justify-content: space-between; align-items: center;">
                            <?php echo esc_html($faq['question']); ?>
                            <span style="font-size: 1.5rem; transition: transform 0.2s;">+</span>
                        </summary>
                        <div style="margin-top: 1rem; font-size: 1.125rem; color: var(--color-muted-foreground); line-height: 1.6;">
                            <?php echo esc_html($faq['answer']); ?>
                        </div>
                    </details>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<style>
    details[open] summary span {
        transform: rotate(45deg);
    }

    summary::-webkit-details-marker {
        display: none;
    }
</style>
