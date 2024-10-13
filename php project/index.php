<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Home"; ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo "WEB LOOK_UP"; ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><?php echo "Home"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feature.php"><?php echo "Features"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pricing.php"><?php echo "Pricing"; ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><?php echo "Contact"; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container-fluid bg-dark text-white text-center py-5">
        <h1><?php echo "Welcome to Our Website"; ?></h1>
        <p class="lead"><?php echo "A simple and elegant solution for your business needs.";?></p>
        <a href="#" class="btn btn-light btn-lg"><?php echo "Get Started"; ?></a>
    </div>

    <!-- Features Section -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Consulting"; ?></h5>
                        <p class="card-text"><?php echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit."; ?>
                        </p>
                        <a href="#" class="btn btn-light btn-lg border border-dark"><?php echo " Learn More"; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Marketing"; ?></h5>
                        <p class="card-text">
                            <?php echo "spendisse potenti. Praesent ut diam ac erat feugiat dapibus."; ?></p>
                        <a href="#" class="btn btn-light btn-lg border border-dark"><?php echo "Learn More"; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo "Devolopment";?></h5>
                        <p class="card-text">
                            <?php echo "iquam erat volutpat. Quisque ut magna eu risus faucibus posuere.";?></p>
                        <a href="#" class="btn btn-light btn-lg border border-dark"><?php echo "Learn More";?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">

            <article class="blog-post">
                <h2 class="blog-post-title mt-5">Sample blog post</h2>

                <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                    Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                <hr>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h2>Blockquotes</h2>
                <p>This is an example blockquote in action:</p>
                <blockquote class="blockquote">
                    <p>Quoted text goes here.</p>
                </blockquote>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>lists</h3>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout. This is an example unordered list:</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>And this is an ordered list:</p>
                <ol>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ol>
                <p>And this is a definiton list:</p>
                <dl>
                    <dt>HyperText Markup Language (HTML)</dt>
                    <dd>The language used to describe and define the content of a Web page</dd>
                    <dt>Cascading Style Sheets (CSS)</dt>
                    <dd>Used to describe the appearance of Web content</dd>
                    <dt>JavaScript (JS)</dt>
                    <dd>The programming language used to build advanced Web sites and applications</dd>
                </dl>
                <h2>Inline HTML elements</h2>
                <p>HTML defines a long list of available inline tags, a complete list of which can be found on the <a
                        href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer Network</a>.
                </p>
                <ul>
                    <li><strong>To bold text</strong>, use <code
                            class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                    <li><em>To italicize text</em>, use <code
                            class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                    <li>Abbreviations, like <abbr title="HyperText Markup Langage">HTML</abbr> should use <code
                            class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code
                            class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.
                    </li>
                    <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                            class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                    <li><del>Deleted</del> text should use <code
                            class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins> text
                        should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                    <li>Superscript <sup>text</sup> uses <code
                            class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
                        <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.</li>
                </ul>
                <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                <h2>Heading</h2>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
            
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2020 by <a href="#">Jacob</a></p>

                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <blockquote>
                    <p>Longer quote goes here, maybe with some <strong>emphasized text</strong> in the middle of it.</p>
                </blockquote>
                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <h3>Example table</h3>
                <p>And don't forget about tables in these posts:</p>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Upvotes</th>
                            <th>Downvotes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alice</td>
                            <td>10</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>Bob</td>
                            <td>4</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>Charlie</td>
                            <td>7</td>
                            <td>9</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Totals</td>
                            <td>21</td>
                            <td>23</td>
                        </tr>
                    </tfoot>
                </table>

                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout.</p>
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2020 by <a href="#">Chris</a></p>

                <p>This is some additional paragraph placeholder content. It has been written to fill the available
                    space and show how a longer snippet of text affects the surrounding content. We'll repeat it often
                    to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
                <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other
                    highly repetitive body text used throughout.</p>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
            </nav>

        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <?php echo "<p>&copy; 2024 LOOK_UP. All rights reserved.</p>"; ?>
    </footer>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>