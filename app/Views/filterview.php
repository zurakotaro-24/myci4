<!-- Layouts and Sections(view_template file) doesn't work with Parser -->
<body>
    <p>Test</p>
    <p>{page_heading|upper:limit_chars(5)}</p>
    <p>DOB: {date|date(1 dS F Y)}</p>
    <p>DOB: {date|date_modify(+5days):date(1 dS F Y)}</p>
    <p>Price: {price|local_currency(PHP)}</p>
    <p>Offer: {offer|round(ceil)}</p>
    <h3>Mobile Number: {phone|HideNumbers(6)}</h3>
</body>