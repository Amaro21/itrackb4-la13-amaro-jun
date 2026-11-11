Q1: Your HomeController is not a resource controller. Name two things an index() on a resource controller does that yours does not have to.

Answer:A resource controller's index() has to load and show a list of records from one table, like all my movies, with paging and filters. It is also one of the seven actions made by Route::resource, so it must use the fixed address /movies and the name movies.index. My HomeController only shows a front page with two counts, so it has to do neither of these, and I chose its address / and its name home myself.

Q2: Your pagination links lost the search term until you added one method. Say what those links contained before, and what the controller therefore received.

Answer: Before I added withQueryString(), the page links only had the page number, like /movies?page=2. So the controller only got page=2 and no search value. It thought there was no search and showed the full list, with the search box empty screenshot 12. 

Q3: A misspelled sort value does not break your page. Explain why that is worse than an error, and what your allowed list does about it.

Answer: When the sort value is misspelled, like ?sort=titl, SQLite does not show an error. The page loads but nothing is sorted, so nobody notices or reports the problem, and on another database the same address could break the page. My allowed list checks the value against title, year and rating, and if it is not one of them, it uses title instead, so the list is always sorted correctly.
