import 'package:http/http.dart' as http;
import 'dart:convert';

class ProductsRepository {
  //add http methods & 
  var url = "https://fakestoreapi.com/products";

  loadProductsFromApi() async {
    var response = await http.get(Uri.parse(url));
    return json.decode(response.body);
  }
}
