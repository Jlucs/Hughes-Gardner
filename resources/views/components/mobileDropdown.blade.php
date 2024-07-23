<div class="mobile-dropdown" id="mobileDropdownMenu">
    <ul>
        <li><a href="/services">Services</a></li>
        <li><a href="/about-us">About Hughes Gardner</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/careers">Careers</a></li>
        <li><a href="/media">News and Media</a></li>
    </ul>
    <ul>
        <li><a href="/green-cleaning" class="">Green Cleaning</a></li>
        <li><a href="/awards-and-recognition" class="">Awards and Recognition</a></li>
        <li><a href="/pandemic-preventative-measures" class="">Pandemic Preventative Measures</a></li>
        <li><a href="/multi-site-contracts-and-standalone-clients" class="">Multi-Site Contracts And Standalone Clients</a></li>
        <li><a href="/waste-and-recycling" class="">Waste and Recycling</a></li>
    </ul>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const drawerToggle = document.getElementById('mobileMenuButton');
        const mobileDropdown = document.getElementById('mobileDropdownMenu');
        const breakpoint = 991.98; // Adjust this breakpoint to match your design

        function toggleDropdown() {
            if (mobileDropdown.style.display === 'none' || mobileDropdown.style.display === '') {
                mobileDropdown.style.display = 'block';
                document.body.classList.add('fixed-position');
            } else {
                mobileDropdown.style.display = 'none';
                document.body.classList.remove('fixed-position');
            }
        }

        function closeDropdown() {
            mobileDropdown.style.display = 'none';
            document.body.classList.remove('fixed-position');
        }

        drawerToggle.addEventListener('click', toggleDropdown);

        document.addEventListener('click', function(event) {
            if (!drawerToggle.contains(event.target) && !mobileDropdown.contains(event.target)) {
                closeDropdown();
            }
        });

        window.addEventListener('resize', function() {
            if (window.innerWidth >= breakpoint) {
                closeDropdown();
            }
        });
    });
</script>