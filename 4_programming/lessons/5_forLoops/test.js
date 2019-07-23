// Initialise Mocha/Chai.
mocha.setup('bdd');
mocha.traceIgnores = ['mocha.min.js', 'chai.min.js'];
var expect = chai.expect;
var sandbox = chai.spy.sandbox();

describe('functions', function() {
  function r(lower, upper, digits) {
    var range = upper - lower;
    var mag = Math.pow(10, digits || 0);
    var temp = Math.random() * range + lower;
    return Math.floor(temp * mag) / mag;
  }

  function s(nChars) {
    nChars = nChars || r(1,6);
    for (var i=0, out=''; i<nChars; i++) {
      var code = r(0,2) ? r(65,91) : r(97,123);
      out += String.fromCharCode(code);
    }
    return out;
  }

  beforeEach(function() {
    sandbox.on(window, 'alert', () => 0);
    sandbox.on(console, 'log', () => 0);
  });

  afterEach(function() {
    sandbox.restore();
  });

  describe('#countup()', function() {
    it('should log 1 to 10', function() {
      countup();
      expect(console.log).called.exactly(10).nth(1).with(1).and.nth(10).with(10);
    });
  });

  describe('#countdown()', function() {
    var vals = [10, r(1,10)];

    vals.forEach(function(val) {
      it('should log a count down from ' + val + ' to 1 then BLASTOFF!, when given ' + val, function() {
        countdown(val);
        expect(console.log).called.exactly(val+1).nth(1).with(val).and.nth(val).with(1).and.nth(val+1).with('BLASTOFF!');
      });
    });
  });

  describe('#goodDog()', function() {
    var vals = ['Spot', 'Rex', 'Bob', 'Rufus'];

    vals.forEach(function(val,i) {
      var result = val + ' is a good boy!';
      it('should log ' + result, function() {
        goodDog();
        expect(console.log).called.nth(i+1).with(result);
      });
    });
  });

  describe('#squareNumbers()', function() {
    var vals = [5, 1, r(6,10)];

    vals.forEach(function(val) {
      var squares = [];
      for (var i=0; i<val; i++) {
        squares.push(Math.pow(i+1, 2));
      }
      it('should return ' + squares + ' when given ' + val, function() {
        expect(squareNumbers(val)).to.eql(squares);
      });
    });
  });

});

// Run the tests.
mocha.run();
