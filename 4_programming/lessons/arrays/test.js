// Initialise Mocha/Chai.
mocha.setup('bdd');
mocha.traceIgnores = ['mocha.min.js', 'chai.min.js'];
var expect = chai.expect;
var sandbox = sinon.createSandbox();

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

  describe('#classRoll()', function() {
    var roll = ['Jessica', 'Emily', 'Jordan', 'Kayley', 'Bruce', 'Michael', 'Everett', 'Lisa', 'Sam', 'Noah'];

    before(function() {
      sandbox.stub(console, 'log').callsFake(function(arg) {
          return arg.constructor === Array ? arg.slice(0) : arg;
      });
      sandbox.stub(window, 'alert');
      classRoll();
    });
    after(function() {
      sandbox.restore();
    });

    it('should log the initial array', function() {
      expect(console.log.getCall(0)).to.have.returned(roll);
    });
    it('should alert the third child', function() {
      expect(window.alert.getCall(0)).to.be.calledWith('Jordan');
    });
    it('should log the length of the array', function() {
      expect(console.log.getCall(1)).to.be.calledWith(10);
    });
    it('should log the roll with James added', function() {
      roll.push('James');
      expect(console.log.getCall(2)).to.have.returned(roll);
    });
    it('should log the roll with Jordan removed', function() {
      roll.splice(2,1);
      expect(console.log.getCall(3)).to.have.returned(roll);
    });
    it("should change Michael's name to Mike", function() {
      roll[4] = 'Mike';
      expect(console.log.getCall(4)).to.have.returned(roll);
    });
  });

});

// Run the tests.
mocha.run();
