<%@ page session="true" contentType="text/html; charset=ISO-8859-1" %>
<%@ taglib uri="http://www.tonbeller.com/jpivot" prefix="jp" %>
<%@ taglib prefix="c" uri="http://java.sun.com/jstl/core" %>


<jp:mondrianQuery id="query01" jdbcDriver="com.mysql.jdbc.Driver" 
jdbcUrl="jdbc:mysql://localhost/dwo?user=root&password=" catalogUri="/WEB-INF/queries/factsales.xml">

select {[Measures].[Amount],[Measures].[Quantity]} ON COLUMNS,
  {([Product].[All Products],[Time].[All Times],[Customer],[Address],[Shipper])} ON ROWS
from [penjualan]


</jp:mondrianQuery>





<c:set var="title01" scope="session">Adventure Works Mondrian OLAP Sales</c:set>
